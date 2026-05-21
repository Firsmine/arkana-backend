<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    protected $fillable = [
        'id','user_id','world_id','title','synopsis',
        'cover_image','genre','status','view_count',
    ];

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function chapters() {
        return $this->hasMany(Chapter::class)->orderBy('order');
    }
    public function tags() {
        return $this->belongsToMany(Tag::class, 'novel_tag');
    }
    public function reviews() {
        return $this->hasMany(Review::class);
    }
    public function world() {
        return $this->belongsTo(World::class);
    }
}
