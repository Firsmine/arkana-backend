<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bookmark;
use App\Models\Chapter;
use App\Models\Comment;
use App\Models\Follow;
use App\Models\Novel;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class InteractionController extends Controller
{
    // comment
    public function listComments($chapterId) {
        $comments = Comment::with('user:id,name,avatar')
            ->where('chapter_id', $chapterId)->latest()->get();

        return response()->json([
            'success'=>true,
            'data'=>$comments
        ]);
    }

    public function addComment(Request $request, $chapterId) {
        Chapter::findOrFail($chapterId);

        $request->validate([
            'content'=>'required|string'
        ]);

        $comment = Comment::create([
            'user_id'=>$request->user()->id,
            'chapter_id'=>$chapterId,
            'content'=>$request->content,
        ]);
        
        return response()->json([
            'success'=>true,
            'data'=>$comment->load('user:id,name,avatar')
        ],201);
    }
 
    public function deleteComment(Request $request, $id) {
        $comment = Comment::findOrFail($id);
        if ($request->user()->id !== $comment->user_id && $request->user()->role !== 'admin') abort(403);

        $comment->delete();
        return response()->json([
            'success'=>true,
            'message'=>'Comment deleted'
        ]);
    }
 
    // review
    public function listReviews($novelId) {
        $reviews = Review::with('user:id,name,avatar')
                            ->where('novel_id',$novelId)
                            ->latest()
                            ->get();
        $avg = $reviews->avg('rating');

        return response()->json([
            'success'=>true,
            'data'=>[
                'avg_rating'=>round($avg,1),
                'reviews'=>$reviews
            ]
        ]);
    }

    public function addReview(Request $request, $novelId) {
        Novel::findOrFail($novelId);
        $request->validate([
            'rating'=>'required|integer|min:1|max:5',
            'body'=>'nullable|string'
        ]);
        $review = Review::updateOrCreate(
            ['user_id'=>$request->user()->id, 'novel_id'=>$novelId],
            ['rating'=>$request->rating, 'body'=>$request->body]
        );
        return response()->json([
            'success'=>true,
            'data'=>$review]);
    }
 
    public function deleteReview(Request $request, $id) {
        $review = Review::findOrFail($id);
        if ($request->user()->id !== $review->user_id) abort(403);
        
        $review->delete();
        return response()->json([
            'success'=>true,
            'message'=>'Review deleted'
        ]);
    }
 
    // bookmarks
    public function listBookmarks(Request $request) {
        $bookmarks = Bookmark::with('novel:id,title,cover_image,genre,status')
            ->where('user_id',$request->user()->id)->latest()->get();

        return response()->json([
            'success'=>true,
            'data'=>$bookmarks
        ]);
    }
 
    public function toggleBookmark(Request $request) {
        $request->validate([
            'novel_id'=>'required|exists:novels,id'
        ]);
        $existing = Bookmark::where([
            'user_id'=>$request->user()->id,'novel_id'=>$request->novel_id
        ])->first();
        if ($existing) {
            $existing->delete();
            return response()->json([
                'success'=>true,
                'message'=>'Bookmark deleted',
                'bookmarked'=>false]);
        }
        Bookmark::create(['user_id'=>$request->user()->id,'novel_id'=>$request->novel_id]);
        return response()->json([
            'success'=>true,
            'message'=>'Novel bookmarked',
            'bookmarked'=>true
        ],201);
    }
 
    // follow
    public function toggleFollow(Request $request) {
        $request->validate([
            'user_id'=>'required|exists:users,id'
        ]);

        if ($request->user()->id === $request->user_id) abort(400,'You cannot follow yourself');
        $existing = Follow::where([
            'follower_id'=>$request->user()->id,'following_id'=>$request->user_id
        ])->first();

        if ($existing) {
            $existing->delete();
            return response()->json([
                'success'=>true,
                'following'=>false
            ]);
        }
        
        Follow::create(['follower_id'=>$request->user()->id,'following_id'=>$request->user_id]);
        return response()->json([
            'success'=>true,
            'following'=>true
        ],201);
    }
 
    public function following(Request $request) {
        $ids = Follow::where('follower_id',$request->user()->id)
                        ->pluck('following_id');

        return response()->json([
            'success'=>true,
            'data'=>User::whereIn('id',$ids)
                        ->get(['id','name','avatar','bio'])
        ]);
    }
 
    public function followers(Request $request) {
        $ids = Follow::where('following_id',$request->user()->id)
                        ->pluck('follower_id');
        return response()->json([
            'success'=>true,
            'data'=>User::whereIn('id',$ids)
                        ->get(['id','name','avatar','bio'])
        ]);
    }
}
