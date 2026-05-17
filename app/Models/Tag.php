<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tag_ids'
    ];
    public function novels() { 
        return $this->belongsToMany(Novel::class, 'novel_tag'); 
    }
}
