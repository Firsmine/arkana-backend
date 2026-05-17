<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReadingProgress extends Model
{
    protected $fillable = [
        'user_id', 'chapter_id', 'scroll_percent'
    ];
}
