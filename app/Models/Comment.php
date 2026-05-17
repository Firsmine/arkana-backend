<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'chapter_id',
        'content'
    ];
    public function user() {
        return $this->belongsTo(User::class); 
    }
}
