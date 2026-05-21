<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Novel;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::withCount('novels')->orderByDesc('novels_count')->get();
        return response()->json([
            'success'=>true,
            'data'=>$tags
        ]);
    }

    public function syncNovelTags(Request $request, $novelId) {
        $novel = Novel::findOrFail($novelId);
        if ($request->user()->id !== $novel->user_id) abort(403);
        $request->validate([
            'tag_ids'=>'required|array',
            'tag_ids.*'=>'exists:tags,id'
        ]);

        $novel->tags()->sync($request->tag_ids);

        return response()->json([
            'success'=>true,
            'message'=>'Tags updated',
            'data'=>$novel->tags
        ]);
    }
}
