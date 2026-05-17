<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoreEntry extends Model
{
    protected $table = 'lore_entries';
    protected $fillable = [
        'id', 'world_id', 'title', 'content', 'category'
    ];
    public function world() { 
        return $this->belongsTo(World::class); 
    }
}
