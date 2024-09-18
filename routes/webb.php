use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Define global routes outside of closures
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/services', [PagesController::class, 'services'])->name('services');

Route::get('users/index', [UserController::class, 'index'])->name('users.index');
Route::get('/profile/{id}', [UserController::class, 'profile'])->name('users.profile');
Route::get('users/about', [UserController::class, 'about'])->name('users.about');
Route::get('users/contact', [UserController::class, 'contact'])->name('users.contact');
Route::get('users/services', [UserController::class, 'services'])->name('users.services');

// Define car routes globally
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/cars/index', [CarController::class, 'index'])->name('cars.index');
    Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
    Route::post('/cars/store', [CarController::class, 'store'])->name('cars.store');
    Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');
    Route::post('/cars/{id}/update', [CarController::class, 'update'])->name('cars.update');
    Route::get('/cars/{id}/delete', [CarController::class, 'delete'])->name('cars.delete');
});

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__.'/auth.php';
