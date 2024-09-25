<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UseradminController;
use App\Http\Controllers\UserController;
use App\Models\Car;
use Illuminate\Support\Facades\Route;



Route::get('/', [PagesController::class, 'home'])-> name('home');
Route::get('/about', [PagesController::class, 'about'])-> name('about');
Route::get('/contact', [PagesController::class, 'contact'])-> name('contact');
Route::get('/services', [PagesController::class, 'services'])-> name('services');
Route::get('/car', [PagesController::class, 'car'])-> name('car');
Route::get('/search',[PagesController::class,'search'])->name('search');

Route::post('/users/book/{id}', [UserController::class, 'book'])->name('users.book');
Route::get('/profile/edit', [UserController::class, 'edit'])->name('users.edit');
Route::post('/profile/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('users/index',[UserController::class,'index'])->name('users.index');
Route::get('users/car',[UserController::class,'car'])->name('users.car');
Route::get('users/editprofile',[UserController::class,'editprofile'])->name('users.editprofile');
Route::get('/profile/{id}',[UserController::class,'profile'])->name('users.profile');
Route::get('users/about',[UserController::class,'about'])->name('users.about');
Route::get('users/contact',[UserController::class,'contact'])->name('users.contact');
Route::post('/contact/send', [UserController::class, 'sendMail'])->name('users.sendContactForm');
Route::get('users/services',[UserController::class,'services'])->name('users.services');
Route::get('users/search',[UserController::class,'search'])->name('users.search');
Route::get('users/selectpayment', [UserController::class, 'selectPaymentMethod'])->name('users.selectpayment');
Route::post('users/selectpayment', [UserController::class, 'selectPaymentMethod'])->name('users.selectpayment.post');


Route::get('useradmin/index',[UseradminController::class,'index'])->name('useradmin.index');
Route::get('useradmin/edit/{id}',[UseradminController::class,'edit'])->name('useradmin.edit');
Route::post('useradmin/update/{id}',[UseradminController::class,'update'])->name('useradmin.update');
Route::get('useradmin/delete/{id}',[UseradminController::class,'delete'])->name('useradmin.delete');


Route::middleware(['auth','admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/cars/index',[CarController::class,'index'])->name('cars.index');
    Route::get('/cars/create',[CarController::class,'create'])->name('cars.create');
    Route::post('/cars/store',[CarController::class,'store'])->name('cars.store');
    Route::get('/cars/{id}/edit',[CarController::class,'edit'])->name('cars.edit');
    Route::post('/cars/{id}/update',[CarController::class,'update'])->name('cars.update');
    Route::get('/cars/{id}/delete',[CarController::class,'delete'])->name('cars.delete');
    Route::get('/cars/{id}/view', [CarController::class, 'show'])->name('cars.view');
    
});

    

// Route::get('/dashboard', function () {
    
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
