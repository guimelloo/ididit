<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Art extends Model
{
    protected $table = 'arts';

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_arts', 'art_id', 'user_id');
    }

    public function videos()
    {
        return $this->hasMany(Video::class, 'art_id');
    }
} 
