<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function category()
    {
        // this category has many posts.
        return $this->hasMany(Post::class);
    }
}
