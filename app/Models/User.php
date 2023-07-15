<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Blog;
use App\Models\Cart;
use App\Models\Plan;
use App\Models\Event;
use App\Models\Product;
use App\Models\Transaction;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'is_admin',
        'city',
        'state',
        'country',
        'address',
        'business_name',
        'business_email',
        'business_phone',
        'business_city',
        'business_state',
        'business_country',
        'business_address',
        'business_number',
        'business_type',
        'business_industry',
        'password',
        'is_paid_user',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function blog(){
        return $this->hasMany(Blog::class);
    }


    public function event(){
        return $this->hasMany(Event::class);
    }


    public function product(){
        return $this->hasMany(Product::class);
    }

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function plan(){
    return  $this->hasMany(Plan::class);
    }

    public function transaction(){
        return  $this->hasMany(Transaction::class);
        }


}
