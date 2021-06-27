<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    protected $fillable = [
        'Title',
        'Content',
        'Video',
        'Images',
        'type_id',
        'category_id',
        
    ];
    protected function types(){
        return $this->belongsTo(Type::class);
    }
    protected function categories(){
        return $this->belongsTo(Category::class);
    }
}
