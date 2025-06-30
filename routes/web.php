<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\creatorSpaceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/suresh-mukund', [HomeController::class, 'sureshMukund'])->name('sureshMukund');
Route::get('/creator-space', [HomeController::class, 'creatorSpace'])->name('creatorSpace');
Route::get('/the-kings', [HomeController::class, 'theKings'])->name('theKings');
Route::get('/book-us-live', [HomeController::class, 'bookUsLive'])->name('bookUsLive');
Route::get('/creator-space', [HomeController::class, 'creatorSpace'])->name('creatorSpace');
Route::get('/our-team', [HomeController::class, 'ourTeam'])->name('ourTeam');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/creator-space/studio-1', [creatorSpaceController::class, 'studio1'])->name('studio1');
Route::get('/creator-space/studio-2', [creatorSpaceController::class, 'studio2'])->name('studio2');
Route::get('/creator-space/studio-3', [creatorSpaceController::class, 'studio3'])->name('studio3');
Route::get('/creator-space/studio-4', [creatorSpaceController::class, 'studio4'])->name('studio4');
Route::get('/creator-space/studio-5', [creatorSpaceController::class, 'studio5'])->name('studio5');

Route::get('/courses', [CourseController::class, 'course'])->name('course');
Route::get('/course/diploma-in-street-dance', [CourseController::class, 'diploma'])->name('diploma');
Route::get('/course/kings-golden-pass', [CourseController::class, 'golden'])->name('golden');