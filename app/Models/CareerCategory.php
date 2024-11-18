<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerCategory extends Model
{
    protected $fillable = ['name'];

    public function careers()
    {
        return $this->hasMany(Career::class);
    }
}
