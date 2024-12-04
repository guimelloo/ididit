    <?php
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\Career\CareerController;
    use App\Http\Controllers\Contact\ContactController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('index');
    });

    Route::get('/career', function () {
        return view('career');
    })->name('career');

    Route::post('/career', [CareerController::class, 'create'])->name('register.store');

    Route::post('/careerHome', [ContactController::class, 'create'])->name('email.store');

    Route::middleware('auth')->group(function () {
        Route::get('/careerHome', function () {
            return view('careerHome');
        });

    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
