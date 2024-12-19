<?php declare(strict_types=1);

namespace App\Http\Controllers\Art;

use App\Models\UserArts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

class ArtRepository
{
    public function __construct(private UserArts $eloquent)
    {}

    public function add(array $datas)
    {
        $ids = [];
        $newData = [];

        foreach ($datas as $data) {
            foreach ($data as $art) {
                $art_id = match ($art) {
                    'Jiu-Jitsu' => 1,
                    'Muay Thai' => 2,
                    'Boxe' => 3,
                    'Karate' => 4,
                    'Taekwondo' => 5,
                    'Judo' => 6,
                    'Kung Fu' => 7,
                };
    
                $ids[] = $art_id;
            }
        }

        foreach ($ids as $art_id) {
            $art = $this->eloquent->newQuery()->create([
                'user_id' => Auth::user()->id,
                'art_id' => $art_id,
            ]);

            $newData[] = $art;
        }
        
        return $newData;
    }

    public function userArts()
    {
        $arts = $this->eloquent
                ->newQuery()
                ->where(['user_id' => Auth::user()->id])
                ->get()
                ->toArray();

        return $arts;
    }
}