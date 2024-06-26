<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PagesController::class, 'home'])-> name('home');
Route::get('/about', [PagesController::class, 'about'])-> name('about');
Route::get('/contact', [PagesController::class, 'contact'])-> name('contact');
Route::get('/services', [PagesController::class, 'services'])-> name('services');


Route::get('users/index',[UserController::class,'index'])->name('users.index');
Route::get('users/profile',[UserController::class,'profile'])->name('users.profile');
Route::get('users/about',[UserController::class,'about'])->name('users.about');
Route::get('users/contact',[UserController::class,'contact'])->name('users.contact');
Route::get('users/services',[UserController::class,'services'])->name('users.services');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
