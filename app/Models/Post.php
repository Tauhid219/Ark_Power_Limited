<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'featured_image',
        'category_id',
        'published',
        'published_at',
    ];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
