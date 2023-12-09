<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function posts() {
        return $this->hasMany(Post::class);
    }

    // Route default slug
    public function getRouteKeyName() {
        return 'slug';
    }

    // Slugable
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
