<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/bookUsLive', [HomeController::class, 'bookUsLive'])->name('bookUsLive');
Route::get('/creatorSpace', [HomeController::class, 'creatorSpace'])->name('creatorSpace');
Route::get('/ourTeam', [HomeController::class, 'ourTeam'])->name('ourTeam');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');