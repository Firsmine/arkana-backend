<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Novel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NovelController extends Controller
{
    // list semua novel (public)
    public function index(Request $request)
    {
        $query = Novel::with(['author:id,name', 'tags'])
            ->withAvg('reviews', 'rating')
            ->where('status', '!=', 'draft')
            ->orderByDesc('view_count');
 
        if ($request->genre) $query->where('genre', $request->genre);
        if ($request->tag) {
            $query->whereHas('tags', fn($q) => $q->where('slug', $request->tag));
        }
 
        return response()->json([
            'success' => true,
            'data'    => $query->paginate(12),
        ]);
    }
 
    // detail (public)
    public function show($id)
    {
        $novel = Novel::with(['author:id,name', 'tags', 'world'])
            ->withAvg('reviews', 'rating')
            ->findOrFail($id);
 
        // Increment view count
        $novel->increment('view_count');
 
        // Chapters sesuai role
        $chapters = $novel->chapters()
            ->when(!Auth::check() || Auth::id() !== $novel->user_id,
                fn($q) => $q->where('status', 'published')
            )->get(['id','title','order','status','created_at']);
 
        return response()->json([
            'success' => true,
            'data'    => array_merge($novel->toArray(), ['chapters' => $chapters]),
        ]);
    }
 
    // buat novel (writer only)
    public function store(Request $request)
    {
        $this->authorizeRole($request, ['writer','admin']);
 
        $validated = $request->validate([
            'title'       => 'required|string|max:200',
            'synopsis'    => 'nullable|string',
            'cover_image' => 'nullable|string',
            'genre'       => 'required|in:fantasy,dark_fantasy,isekai,adventure,romance_fantasy,mythology,sci_fantasy',
            'world_id'    => 'nullable|exists:worlds,id',
        ]);
 
        $novel = Novel::create(array_merge($validated, ['user_id' => $request->user()->id]));
 
        return response()->json([
            'success' => true,
            'message' => 'Novel berhasil dibuat',
            'data'    => $novel,
        ], 201);
    }
 
    // edit novel (owner only)
    public function update(Request $request, $id)
    {
        $novel = Novel::findOrFail($id);
        $this->authorizeOwner($request, $novel->user_id);
 
        $novel->update($request->only([
            'title','synopsis','cover_image','genre','status','world_id'
        ]));
 
        return response()->json([
            'success' => true,
            'message' => 'Novel diperbarui',
            'data'    => $novel->fresh(),
        ]);
    }
 
    // hapus novel (owner only)
    public function destroy(Request $request, $id)
    {
        $novel = Novel::findOrFail($id);
        $this->authorizeOwner($request, $novel->user_id);
        $novel->delete();
 
        return response()->json(['success' => true, 'message' => 'Novel dihapus']);
    }
 
    // novel milikku (writer)
    public function myNovels(Request $request)
    {
        $novels = Novel::with('tags')->withAvg('reviews','rating')
            ->where('user_id', $request->user()->id)
            ->latest()->get();
 
        return response()->json(['success' => true, 'data' => $novels]);
    }
 
    private function authorizeRole(Request $request, array $roles)
    {
        if (!in_array($request->user()->role, $roles)) {
            abort(403, 'Akses ditolak');
        }
    }
 
    private function authorizeOwner(Request $request, $ownerId)
    {
        if ($request->user()->id !== $ownerId && $request->user()->role !== 'admin') {
            abort(403, 'Bukan milikmu');
        }
    }
}
