<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'id','world_id','faction_id','name',
        'avatar','race','power','backstory'
    ];
    public function faction() {
        return $this->belongsTo(Faction::class); 
    }
}
