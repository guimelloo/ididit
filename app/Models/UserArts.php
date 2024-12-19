<?php declare(strict_types=1);

namespace App\Models;

class UserArts extends Model
{
    protected $table = 'users_arts';

    public $timestamps = false;

    public function arts()
    {
        return $this->belongsTo(Art::class, 'art_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}