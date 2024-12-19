<?php declare(strict_types=1);

namespace App\Http\Controllers\Art;

use App\Admin\Users\UsersResource;
use App\Http\Controllers\Career\CareerRepository;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ArtController extends Controller
{
    public function __construct(private ArtRepository $repository, private CareerRepository $careerRepository)
    {}

    public function form(Request $request)
    {
        $validated = $request->validate([
            'martial_arts' => 'required|array',
        ]);

        /** @var User $user */
        $user = Auth::user();

        $user->arts()->sync($validated['martial_arts']);
        
        $user->update(['career' => true]);

        return redirect()->route('career.home');
    }

    
}
