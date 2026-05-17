<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Novel;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function stats() {
        return response()->json([
            'success' => true,
            'data' => [
                'total_users' => User::count(),
                'total_novels' => Novel::count(),
                'total_chapters' => Chapter::count(),
                'total_comments' => Comment::count(),
                'trending' => Novel::orderByDesc('view_count')->take(5)->get(['id','title','view_count']),
            ]
        ]);
    }
 
    public function listUsers() {
        return response()->json(['success'=>true,'data'=>User::paginate(20)]);
    }
 
    public function changeRole(Request $request, $id) {
        $user = User::findOrFail($id);
        $request->validate([
            'role'=>'required|in:reader,writer,admin'
        ]);
        $user->update(['role'=>$request->role]);
        return response()->json([
            'success'=>true,
            'message'=>'Role updated',
            'data'=>$user->fresh()]);
    }
 
    public function deleteNovel($id) {
        Novel::findOrFail($id)->delete();
        return response()->json([
            'success'=>true,
            'message'=>'Novel was deleted by admin'
        ]);
    }
 
    public function deleteComment($id) {
        Comment::findOrFail($id)->delete();
        return response()->json([
            'success'=>true,
            'message'=>'The comment was deleted by admin'
        ]);
    }
}
