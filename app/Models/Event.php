<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'title',
        'category',
        'location',
        'host',
        'start_date',
        'end_date',
        'image',
        'description'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
