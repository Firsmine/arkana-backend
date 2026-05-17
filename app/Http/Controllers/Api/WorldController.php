<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\World;
use Illuminate\Http\Request;

class WorldController extends Controller
{
    public function index() {
        return response()->json([
            'success'=>true,
            'data'=>World::with('factions','characters')->get()
        ]);
    }
 
    public function show($id) {
        return response()->json([
            'success'=>true,
            'data'=>World::with('factions','characters')->findOrFail($id)
        ]);
    }
 
    // semua data worldbuilding sekaligus
    public function full($id) {
        $world = World::with([
            'factions',
            'characters.faction:id,name',
            'loreEntries',
        ])->findOrFail($id);
        return response()->json([
            'success'=>true,
            'data'=>$world
        ]);
    }
 
    public function store(Request $request) {
        if (!in_array($request->user()->role, ['writer','admin'])) abort(403);
        $data = $request->validate([
            'name'=>'required',
            'description'=>'nullable',
            'map_image'=>'nullable'
        ]);
        $world = World::create(array_merge($data, ['user_id'=>$request->user()->id]));
        return response()->json([
            'success'=>true,
            'data'=>$world
        ],201);
    }
 
    public function update(Request $request, $id) {
        $world = World::findOrFail($id);
        if ($request->user()->id !== $world->user_id && $request->user()->role !== 'admin') abort(403);
        
        $world->update($request->only(['name','description','map_image']));
        return response()->json([
            'success'=>true,
            'data'=>$world->fresh()
        ]);
    }
 
    public function destroy(Request $request, $id) {
        $world = World::findOrFail($id);
        if ($request->user()->id !== $world->user_id && $request->user()->role !== 'admin') abort(403);
        
        $world->delete();
        return response()->json([
            'success'=>true,
            'message'=>'World deleted'
        ]);
    }
}
