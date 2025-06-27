<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/suresh-mukund', [HomeController::class, 'sureshMukund'])->name('sureshMukund');
Route::get('creator-space', [HomeController::class, 'creatorSpace'])->name('creatorSpace');
Route::get('/the-kings', [HomeController::class, 'theKings'])->name('theKings');
Route::get('/book-us-live', [HomeController::class, 'bookUsLive'])->name('bookUsLive');
Route::get('/creator-space', [HomeController::class, 'creatorSpace'])->name('creatorSpace');
Route::get('/our-team', [HomeController::class, 'ourTeam'])->name('ourTeam');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');