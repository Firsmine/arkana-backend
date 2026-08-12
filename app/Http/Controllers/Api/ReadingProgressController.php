<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\ReadingProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReadingProgressController extends Controller
{
    public function update(Request $request) {
        $request->validate([
            'chapter_id' => 'required|exists:chapters,id',
            'scroll_percent' => 'required|integer|min:0|max:100',
        ]);
 
        $progress = ReadingProgress::updateOrCreate(
            ['user_id'=>Auth::id(), 'chapter_id'=>$request->chapter_id],
            ['scroll_percent'=>$request->scroll_percent]
        );
 
        return response()->json([
            'success' => true,
            'data' => $progress
        ]);
    }
 
    public function show($novelId) {
        $chapterIds = Chapter::where('novel_id',$novelId)->pluck('id');
        $progress = ReadingProgress::where('user_id',Auth::id())
            ->whereIn('chapter_id',$chapterIds)->get();

        return response()->json([
            'success'=>true,
            'data'=>$progress
        ]);
    }
}
