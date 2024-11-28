<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['client_category_id', 'name', 'logo', 'url'];

    public function category()
    {
        return $this->belongsTo(ClientCategory::class, 'client_category_id');
    }
}
