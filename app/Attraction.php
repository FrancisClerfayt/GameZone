<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $fillable = [
        'name', 'xp_gain', 'description', 'image', 'restriction_id'
    ];
}
