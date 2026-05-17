<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\World;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index($worldId) {
        return response()->json([
            'success'=>true,
            'data'=>Character::where('world_id',$worldId)->get()]);
    }
 
    public function store(Request $request, $worldId) {
        $world = World::findOrFail($worldId);
        if ($request->user()->id !== $world->user_id) abort(403,'Not Your World');

        $data = $request->validate([
            'faction_id' => 'nullable',
            'name' => 'required',
            'avatar' => 'nullable',
            'race' => 'nullable',
            'power' => 'nullable',
            'backstory' => 'nullable'
        ]);

        $character = Character::create(array_merge($data, ['world_id'=>$worldId]));
        return response()->json([
            'success' => true,
            'data' => $character
        ],201);
    }
 
    public function update(Request $request, $worldId, $id) {
        $character = Character::where('world_id',$worldId)
                                ->where('id',$id)
                                ->firstOrFail();

        $world = World::findOrFail($worldId);
        if ($request->user()->id !== $world->user_id) abort(403);

        $character->update($request->only([
            'faction_id','name','avatar','race','power','backstory'
        ]));

        return response()->json([
            'success'=>true,
            'data'=>$character->fresh()
        ]);
    }
 
    public function destroy(Request $request, $worldId, $id) {
        $character = Character::where('world_id',$worldId)
                                ->where('id',$id)
                                ->firstOrFail();

        $world = World::findOrFail($worldId);
        if ($request->user()->id !== $world->user_id) abort(403);

        $character->delete();
        return response()->json([
            'success'=>true,
            'message'=>'Character deleted'
        ]);
    }
}
