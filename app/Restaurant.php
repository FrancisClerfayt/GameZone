<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
	protected $fillable = [
		'name',
		'description',
		'image',
		'menu_adult',
		'menu_child'
	];
}
