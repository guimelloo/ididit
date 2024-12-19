<?php declare(strict_types=1);

namespace App\Http\Controllers\Admin\ArtsVideos;

use App\Http\Controllers\Career\CareerRepository;
use App\Http\Controllers\Controller;
use App\Models\Art;
use App\Models\ArtVideo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtVideosController extends Controller
{
    public function __construct(private Art $eloquent, private ArtVideo $artVideo)
    {}

    public function index()
    {
        $user = Auth::user();

        if (! $user->admin) {
            return redirect()->route('career.home')->with('Error', 'You do not have access to this page!');
        }
        
        $arts = $this->eloquent->get()->pluck('name', 'id');

        return view('career.admin.videos', ['arts' => $arts]);
    }

    public function form(Request $request)
    {
        $validated = $request->validate([
            'martial_art' => 'required|integer',
            'youtube_code' => 'required|string',
        ]);

        $videos = $this->artVideo->newQuery()->create([
            'art_id' => $validated['martial_art'],
            'youtube_code' => $validated['youtube_code'],
        ]);

        if ($videos) {
            return redirect()->route('career.home')->with('Success', 'Videos saved!');
        }

        return redirect()->route('career.admin.videos')->with('Error', 'Videos not saved!');
    }

    
}
