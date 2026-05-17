<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faction extends Model
{
    protected $fillable = [
        'id','world_id','name','emblem','description'
    ];
    public function world() { 
        return $this->belongsTo(World::class);
    }
}
