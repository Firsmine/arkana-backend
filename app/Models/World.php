<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class World extends Model
{
    protected $fillable = [
        'id','user_id','name','description','map_image'
    ];
    public function factions()   { 
        return $this->hasMany(Faction::class); 
    }
    public function characters() { 
        return $this->hasMany(Character::class); 
    }
    public function loreEntries(){ 
        return $this->hasMany(LoreEntry::class);
    }
}
