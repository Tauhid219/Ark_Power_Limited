<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'category_id',
        'image',
        'featured',
        'status',
        'source_url',
        'source_name',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
