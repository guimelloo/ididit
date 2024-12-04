<?php declare(strict_types=1);

namespace App\Http\Controllers\Career;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

class CareerRepository
{
    public function __construct(private User $eloquent)
    {}

    public function getUsers(): Collection
    {
        return $this->eloquent->newQuery()
            ->withCasts($this->casts())
            ->get();
    }

    public function find(int $id): User
    {
        return $this->eloquent->newQuery()
            ->withCasts($this->casts())
            ->findOrFail($id);
    }

    public function create(array $data): User
    {        
        $user = $this->eloquent->newQuery()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'art' => $data['art']
        ]);

        return $user;
    }

    public function update(int $id, array $data)
    {
        $data = array_filter([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        $this->eloquent->newQuery()
            ->where('id', $id)    
            ->update($data);
    }

    public function delete(int $id): void
    {
        $response = $this->eloquent->newQuery()->find($id);
        $response->delete();
    }


    private function casts(): array
    {
        return [
            'email_verified_at' => 'date',
            'active' => 'boolean',
        ];
    }
}