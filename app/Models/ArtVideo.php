<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtVideo extends Model
{
    protected $table = 'arts_videos';

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
