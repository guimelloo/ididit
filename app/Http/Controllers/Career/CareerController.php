<?php declare(strict_types=1);

namespace App\Http\Controllers\Career;

use App\Admin\Users\UsersResource;
use App\Http\Controllers\Art\ArtRepository;
use App\Http\Controllers\Controller;
use App\Models\Art;
use App\Models\UserArts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CareerController extends Controller
{
    public function __construct(private CareerRepository $repository, private ArtRepository $artRepository)
    {}

    public function index()
    {
        return view('index');
    }

    public function form()
    {
        return view('form');
    }

    public function home()
    {
        $userArts = $this->artRepository->userArts();

        $artMartialsName = Auth::user()->arts->pluck('name');
           
        return view('career.home', ['userArts' => $userArts, 'artMartialsName' => $artMartialsName]);
    }

    public function account()
    {
        return view('career.account');
    }

    public function arts()
    {
        $artMartials = Art::query()->get()->pluck('name', 'id');

        return view('career.arts', compact('artMartials'));
    }

    public function videos()
    {
        $artMartials = Auth::user()->arts()->withCount('videos')->get();

        return view('career.videos', compact('artMartials'));
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
        
        if ($this->repository->create($validated)) {
            return redirect()->route('career.home');
        }
        
        return redirect()->route('career.form');
    }

    public function startCareer()
    {
        return view('career.start-career');
    }
}
