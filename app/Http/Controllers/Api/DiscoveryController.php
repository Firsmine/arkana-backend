<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\Novel;
use Illuminate\Http\Request;

class DiscoveryController extends Controller
{
    // search by keyword
    public function search(Request $request) {
        $q = $request->q;
        $results = Novel::with('author:id,name')
            ->where('status','!=','draft')
            ->where(function($query) use ($q) {
                $query->where('title','like',"%{$q}%")
                      ->orWhere('synopsis','like',"%{$q}%");
            })
            ->orderByDesc('view_count')->paginate(10);
            
        return response()->json([
            'success'=>true,
            'data'=>$results
        ]);
    }
 
    // trending top 10 by view_count
    public function trending() {
        $novels = Novel::with('author:id,name')
            ->withAvg('reviews','rating')
            ->where('status','!=','draft')
            ->orderByDesc('view_count')->take(10)->get();

        return response()->json([
            'success'=>true,
            'data'=>$novels
        ]);
    }
 
    // Feed — konten dari writer yang difollow
    public function feed(Request $request) {
        $followingIds = Follow::where('follower_id',$request->user()->id)->pluck('following_id');
        $novels = Novel::with('author:id,name')
            ->whereIn('user_id',$followingIds)
            ->where('status','published')
            ->latest()->paginate(10);

        return response()->json([
            'success'=>true,
            'data'=>$novels
        ]);
    }
}
