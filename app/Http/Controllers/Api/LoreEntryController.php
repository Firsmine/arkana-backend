<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LoreEntry;
use App\Models\World;
use Illuminate\Http\Request;

class LoreEntryController extends Controller
{
    public function index($worldId) {
        return response()->json([
            'success'=>true,
            'data'=>LoreEntry::where('world_id',$worldId)->get()]);
    }
 
    public function store(Request $request, $worldId) {
        $world = World::findOrFail($worldId);
        if ($request->user()->id !== $world->user_id) abort(403,'Not Your World');

        $data = $request->validate([
            'title' => 'required',
            'content' => 'nullable',
            'category' => 'nullable'
        ]);

        $loreEntry = LoreEntry::create(array_merge($data, ['world_id'=>$worldId]));
        return response()->json([
            'success' => true,
            'data' => $loreEntry
        ],201);
    }
 
    public function update(Request $request, $worldId, $id) {
        $loreEntry = LoreEntry::where('world_id',$worldId)
                                ->where('id',$id)
                                ->firstOrFail();

        $world = World::findOrFail($worldId);
        if ($request->user()->id !== $world->user_id) abort(403);

        $loreEntry->update($request->only([
            'title','content','category'
        ]));

        return response()->json([
            'success'=>true,
            'data'=>$loreEntry->fresh()
        ]);
    }
 
    public function destroy(Request $request, $worldId, $id) {
        $loreEntry = LoreEntry::where('world_id',$worldId)
                                ->where('id',$id)
                                ->firstOrFail();

        $world = World::findOrFail($worldId);
        if ($request->user()->id !== $world->user_id) abort(403);

        $loreEntry->delete();
        return response()->json([
            'success'=>true,
            'message'=>'Lore entry deleted'
        ]);
    }
}
