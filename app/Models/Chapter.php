<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
 
    protected $fillable = [
        'id','novel_id','title','content','order','status',
    ];
 
    public function novel() {
        return $this->belongsTo(Novel::class); 
    }
    public function comments() { 
        return $this->hasMany(Comment::class); 
    }
}
