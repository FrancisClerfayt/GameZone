<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_Product extends Model
{
	protected $fillable = [
		'cart_id',
		'product_id',
		'quantity'
	];
}
