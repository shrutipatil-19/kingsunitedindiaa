<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\creatorSpaceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudioBookingController;

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

// Route::get('/creator-space/studio-1', [creatorSpaceController::class, 'studio1'])->name('studio1');
// Route::get('/creator-space/studio-2', [creatorSpaceController::class, 'studio2'])->name('studio2');
// Route::get('/creator-space/studio-3', [creatorSpaceController::class, 'studio3'])->name('studio3');
// Route::get('/creator-space/studio-4', [creatorSpaceController::class, 'studio4'])->name('studio4');
// Route::get('/creator-space/studio-5', [creatorSpaceController::class, 'studio5'])->name('studio5');

Route::get('/courses', [CourseController::class, 'course'])->name('course');
Route::get('/course/diploma-in-street-dance', [CourseController::class, 'diploma'])->name('diploma');
Route::get('/course/kings-golden-pass', [CourseController::class, 'golden'])->name('golden');
Route::get('/course/dance-2-dance', [CourseController::class, 'D2D'])->name('D2D');
Route::get('/course/choreo-lab', [CourseController::class, 'choreoLab'])->name('choreoLab');

// // page to display the form
// Route::get('/creator-space/studio-1', [creatorSpaceController::class, 'studio1'])->name('studio1');

// // store booking data from the form
// Route::post('/creator-space/studio-1', [StudioBookingController::class, 'store'])->name('studio.book');

// // fetch available time slots
// Route::get('/creator-space/studio-1/available-times', [StudioBookingController::class, 'availableTimes'])->name('studio1.available-times');


// Route::get('/creator-space/studio-1', [creatorSpaceController::class, 'studio1'])->name('studio1');
// Route::post('/creator-space/studio-1', [StudioBookingController::class, 'store'])->name('studio.book');
// Route::get('/creator-space/studio-1/available-times', [StudioBookingController::class, 'availableTimes'])->name('studio1.available-times');

Route::get('/creator-space/{studio}', [StudioBookingController::class, 'showBookingForm'])->name('studio.book.form');
Route::post('/creator-space/{studio}', [StudioBookingController::class, 'store'])->name('studio.book');

Route::get('/creator-space/{studio}/available-times', [StudioBookingController::class, 'availableTimes'])->name('studio.available-times');