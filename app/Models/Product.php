<?php

namespace App\Models;

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
        'product_image',
        'product_description',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
