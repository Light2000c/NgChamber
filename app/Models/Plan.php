<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'type',
        'amount',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function hasUser(User $user){
        return  $this->contains('user_id', $user->id);
      }

}
