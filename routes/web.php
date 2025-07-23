<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\creatorSpaceController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudioBookingController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about3', [HomeController::class, 'about'])->name('about3');
Route::get('/legacy', [HomeController::class, 'lagacy'])->name('lagacy');

Route::get('/legacy', [HomeController::class, 'about3'])->name('about');
Route::get('/suresh-mukund', [HomeController::class, 'sureshMukund'])->name('sureshMukund');
Route::get('/creator-space', [HomeController::class, 'creatorSpace'])->name('creatorSpace');
Route::get('/the-kings', [HomeController::class, 'theKings'])->name('theKings');
Route::get('/book-us-live', [HomeController::class, 'bookUsLive'])->name('bookUsLive');
Route::get('/creator-space', [HomeController::class, 'creatorSpace'])->name('creatorSpace');
Route::get('/our-team', [HomeController::class, 'ourTeam'])->name('ourTeam');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/contact', [EnquiryController::class, 'enquiry'])->name('enquiry');
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
Route::post('/courseEnquiry', [CourseController::class, 'courseEnquiry'])->name('courseEnquiry');

// rental studio
Route::get('/creator-space/{studio}', [StudioBookingController::class, 'showBookingForm'])->name('studio.book.form');
Route::post('/creator-space/{studio}', [StudioBookingController::class, 'store'])->name('studio.book');
Route::get('/admin/studio/cancel/{booking}/{token}', [StudioBookingController::class, 'adminCancel'])->name('admin.studio.cancel');

Route::get('/creator-space/{studio}/available-times', [StudioBookingController::class, 'availableTimes'])->name('studio.available-times');

// events
Route::get('/events', [EventsController::class, 'events'])->name('events');
Route::get('/event/wedding-event', [EventsController::class, 'weddingEvent'])->name('weddingEvent');


Route::get('/thank-you', [HomeController::class, 'thankyou'])->name('thankyou');

// service
Route::get('/service/live-performance', [ServiceController::class, 'livePerformance'])->name('livePerformance');

Route::get('/workshop', [HomeController::class, 'workshop'])->name('workshop');

Route::get('/inhouse', [HomeController::class, 'inhouse'])->name('inhouse');