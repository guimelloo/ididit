<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    public $timestamps = false;

    protected $fillable = [
        'art_id',
        'youtube_code',
    ];

    public function art()
    {
        return $this->belongsTo(Art::class, 'art_id');
    }
}
