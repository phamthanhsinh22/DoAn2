<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'catName',
        'slug_cat'
        
    ];
    protected function categories(){
        return $this->belongsTo(Category::class);
    }
}
