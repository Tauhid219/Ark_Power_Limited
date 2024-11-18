<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'department',
        'location',
        'career_category_id',
        'description',
        'responsibilities',
        'required_skills',
        'qualifications',
        'benefits',
        'application_process',
        'deadline',
        'contact_info',
        'is_active'
    ];

    public function category()
    {
        return $this->belongsTo(CareerCategory::class, 'career_category_id');
    }
}
