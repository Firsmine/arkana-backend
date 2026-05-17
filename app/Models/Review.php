<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'novel_id',
        'rating',
        'body'
    ];
    public function user() {
        return $this->belongsTo(User::class); 
    }
}
