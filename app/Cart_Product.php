<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Cart;

class Cart_Product extends Model
{
    protected $fillable = [
        'cart_id', 'product_id', 'quantity'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}
