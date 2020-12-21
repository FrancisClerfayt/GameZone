<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $fillable = [
        'name',
        'xp_gain',
        'description',
        'background_image',
        'background_image_alt',
        'logo',
        'logo_alt',
        'restriction'
    ];
}
