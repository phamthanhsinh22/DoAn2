<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapper extends Model
{
    use HasFactory;
    protected $fillable = [
        'Title',
        'Content',
        'Video',
        'episode',
        'anime_id',
        
    ];
    protected function animes(){
        return $this->belongsTo(Anime::class);
    }
}
