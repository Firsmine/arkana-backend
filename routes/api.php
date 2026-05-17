<?php

use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ChapterController;
use App\Http\Controllers\Api\CharacterController;
use App\Http\Controllers\Api\DiscoveryController;
use App\Http\Controllers\Api\FactionController;
use App\Http\Controllers\Api\InteractionController;
use App\Http\Controllers\Api\LoreEntryController;
use App\Http\Controllers\Api\NovelController;
use App\Http\Controllers\Api\ReadingProgressController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\WorldController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// public register & login
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// public novel & chapter
Route::get('/novels', [NovelController::class, 'index']);
Route::get('/novels/{id}', [NovelController::class, 'show']);
Route::get('/novels/{novelId}/chapters', [ChapterController::class, 'index']);
Route::get('/novels/{novelId}/chapters/{chapterId}', [ChapterController::class, 'show']);

// public worldbuilding
Route::get('/worlds', [WorldController::class, 'index']);
Route::get('/worlds/{id}', [WorldController::class, 'show']);
Route::get('/worlds/{id}/full', [WorldController::class, 'full']);
Route::get('/worlds/{wId}/factions', [FactionController::class, 'index']);
Route::get('/worlds/{wId}/characters', [CharacterController::class, 'index']);
Route::get('/worlds/{wId}/lore-entries', [LoreEntryController::class, 'index']);

// public interaction
Route::get('/chapters/{chapterId}/comments', [InteractionController::class,'listComments']);
Route::get('/novels/{novelId}/reviews', [InteractionController::class,'listReviews']);

// public tags
Route::get('/tags', [TagController::class,'index']);

// public discovery
Route::get('/search', [DiscoveryController::class,'search']);
Route::get('/trending', [DiscoveryController::class,'trending']);

// protected middleware
Route::middleware('auth:sanctum')->group(function (){
    // logout, detail, update
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::put('/me', [AuthController::class, 'updateMe']);

    // novels
    Route::get('/my-novels', [NovelController::class, 'myNovels']);
    Route::post('/novels', [NovelController::class, 'store']);
    Route::put('/novels/{id}', [NovelController::class, 'update']);
    Route::delete('/novels/{id}', [NovelController::class, 'destroy']);
    // chapters
    Route::post('/novels/{novelId}/chapters', [ChapterController::class, 'store']);
    Route::put('/novels/{novelId}/chapters/{chapterId}', [ChapterController::class, 'update']);
    Route::delete('/novels/{novelId}/chapters/{chapterId}', [ChapterController::class, 'destroy']);

    // worldbuilding
    Route::post('/worlds', [WorldController::class, 'store']);
    Route::put('/worlds/{id}', [WorldController::class, 'update']);
    Route::delete('/worlds/{id}', [WorldController::class, 'destroy']);
    // faction
    Route::post('/worlds/{worldId}/factions', [FactionController::class, 'store']);
    Route::put('/worlds/{worldId}/factions/{id}', [FactionController::class, 'update']);
    Route::delete('/worlds/{worldId}/factions/{id}', [FactionController::class, 'destroy']);
    // character
    Route::post('/worlds/{worldId}/character', [CharacterController::class, 'store']);
    Route::put('/worlds/{worldId}/character/{id}', [CharacterController::class, 'update']);
    Route::delete('/worlds/{worldId}/character/{id}', [CharacterController::class, 'destroy']);
    // lore entry
    Route::post('/worlds/{worldId}/lore-entries', [LoreEntryController::class, 'store']);
    Route::put('/worlds/{worldId}/lore-entries/{id}', [LoreEntryController::class, 'update']);
    Route::delete('/worlds/{worldId}/lore-entries/{id}', [LoreEntryController::class, 'destroy']);

    // interactions
    // comment
    Route::post('/chapters/{chapterId}/comments', [InteractionController::class,'addComment']);
    Route::delete('/comments/{id}', [InteractionController::class,'deleteComment']);
    // review
    Route::post('/novels/{novelId}/reviews', [InteractionController::class,'addReview']);
    Route::delete('/reviews/{id}', [InteractionController::class,'deleteReview']);
    // bookmark
    Route::get('/bookmarks', [InteractionController::class,'listBookmarks']);
    Route::post('/bookmarks', [InteractionController::class,'toggleBookmark']);
    // follow
    Route::post('/follow', [InteractionController::class,'toggleFollow']);
    Route::get('/following', [InteractionController::class,'following']);
    Route::get('/followers', [InteractionController::class,'followers']);

    // reading progress & set tag
    Route::post('/reading-progress', [ReadingProgressController::class,'update']);
    Route::get('/reading-progress/{novelId}', [ReadingProgressController::class,'show']);
    Route::post('/novels/{novelId}/tags', [TagController::class,'syncNovelTags']);

    // discovery
    Route::get('/feed', [DiscoveryController::class,'feed']);
 
    // admin only
    Route::middleware('admin')->prefix('admin')->group(function () {
        Route::get('/stats', [AdminController::class,'stats']);
        Route::get('/users', [AdminController::class,'listUsers']);
        Route::put('/users/{id}/role', [AdminController::class,'changeRole']);
        Route::delete('/novels/{id}', [AdminController::class,'deleteNovel']);
        Route::delete('/comments/{id}', [AdminController::class,'deleteComment']);
    });
});
