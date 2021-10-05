<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_anime',
        'content',
    ];
    protected function users(){
        return $this->belongsTo(User::class);
    }
    protected function animes(){
        return $this->belongsTo(Anime::class);
    }
}
