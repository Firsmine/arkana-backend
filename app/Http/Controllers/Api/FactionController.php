<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Faction;
use App\Models\World;
use Illuminate\Http\Request;

class FactionController extends Controller
{
    public function index($worldId) {
        return response()->json([
            'success'=>true,
            'data'=>Faction::where('world_id',$worldId)->get()
        ]);
    }
 
    public function store(Request $request, $worldId) {
        $world = World::findOrFail($worldId);
        if ($request->user()->id !== $world->user_id) abort(403,'Not Your World');

        $data = $request->validate([
            'name'=>'required',
            'description'=>'nullable',
            'emblem'=>'nullable'
        ]);

        $faction = Faction::create(array_merge($data, ['world_id'=>$worldId]));

        return response()->json([
            'success'=>true,
            'data'=>$faction
        ],201);
    }
 
    public function update(Request $request, $worldId, $id) {
        $faction = Faction::where('world_id',$worldId)
                            ->where('id',$id)
                            ->firstOrFail();
        $world = World::findOrFail($worldId);

        if ($request->user()->id !== $world->user_id) abort(403);
        $faction->update($request->only(['name','description','emblem']));

        return response()->json([
            'success'=>true,
            'data'=>$faction->fresh()
        ]);
    }
 
    public function destroy(Request $request, $worldId, $id) {
        $faction = Faction::where('world_id',$worldId)
                            ->where('id',$id)
                            ->firstOrFail();
        $world = World::findOrFail($worldId);

        if ($request->user()->id !== $world->user_id) abort(403);
        $faction->delete();

        return response()->json([
            'success'=>true,
            'message'=>'Faction deleted'
        ]);
    }
}
