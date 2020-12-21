<?php

namespace App;

use App\Cart_Product;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'total', 'user_id'
    ];

    public function cart_products(){
        return $this->hasMany(Cart_Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
