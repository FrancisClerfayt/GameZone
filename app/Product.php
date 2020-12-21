<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart_Product;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'image'
    ];

    public function cart_product(){
        return $this->hasMany(Cart_Product::class);
    }
}
