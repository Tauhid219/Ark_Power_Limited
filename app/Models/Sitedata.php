<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class Sitedata extends Model
{
    use HasFactory;

    protected $fillable = [
        'siteName',
        'tagLine',
        'logo',
        'white_logo',
        'favIcon',
        'address',
        'phoneNumber',
        'phoneNumber2',

        'email',
        'fbUrl',
        'linkdinUrl',
        'twitterUrl',
        'teligramUrl',
        'instragramUrl',
        'youtubeUrl',
        'about',
        'mission',
        'vision',
    ];

    
}
