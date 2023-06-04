<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'product_name',
        'product_category',
        'product_price',
        'product_brand',
        'product_size',
        'product_colour',
        'product_image',
        'product_description',
        'reviewed_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function hasCart($user){
        return $this->cart->contains('user_id', $user->id);
    }
}
