<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Novel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChapterController extends Controller
{
    // list chapter
    public function index(Novel $novelId)
    {
        $isOwner = Auth::check() && Auth::id() === $novelId->user_id;
 
        $chapters = $novelId->chapters()
            ->when(!$isOwner, fn($q) => $q->where('status', 'published'))
            ->get(['id','title','order','status','created_at']);
 
        return response()->json([
            'success' => true,
            'data' => $chapters
        ]);
    }
 
    // baca chapter
    public function show($novelId, $chapterId)
    {
        $chapter = Chapter::where('novel_id', $novelId)
            ->where('id', $chapterId)
            ->where('status', 'published')
            ->firstOrFail();
 
        return response()->json(['success' => true, 'data' => $chapter->load('novel:id,title,user_id')]);
    }
 
    // buat chapter (owner only)
    public function store(Request $request, $novelId)
    {
        $novel = Novel::findOrFail($novelId);
        if ($request->user()->id !== $novel->user_id) abort(403, 'Bukan novelmu');
 
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'content' => 'required|string',
            'order' => 'required|integer|min:1',
            'status' => 'in:draft,published',
        ]);
 
        $chapter = Chapter::create(array_merge($validated, ['novel_id' => $novelId]));
        return response()->json([
            'success' => true, 
            'message' => 'Chapter created', 
            'data' => $chapter
        ], 201);
    }

    // edit chapter (owner only)
    public function update(Request $request, $novelId, $chapterId)
    {
        $chapter = Chapter::where('novel_id', $novelId)->where('id', $chapterId)->firstOrFail();
        if ($request->user()->id !== $chapter->novel->user_id) abort(403, 'Bukan novelmu');

        $chapter->update($request->only(['title','content','order','status']));
        return response()->json([
            'success' => true, 
            'data' => $chapter->fresh()
        ]);
    }
 
    // delete chapter (owner only)
    public function destroy(Request $request, $novelId, $chapterId)
    {
        $chapter = Chapter::where('novel_id', $novelId)->where('id', $chapterId)->firstOrFail();
        if ($request->user()->id !== $chapter->novel->user_id) abort(403);
        $chapter->delete();
        return response()->json([
            'success' => true,
            'message' => 'Chapter deleted'
        ]);
    }
}
