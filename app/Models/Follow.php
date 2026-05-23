<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        // 'id',
        'follower_id',
        'following_id',
    ];
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
    public function follower() {
        return $this->belongsTo(User::class, 'follower_id');
    }

    public function following() {
        return $this->belongsTo(User::class, 'following_id');
    }
}
