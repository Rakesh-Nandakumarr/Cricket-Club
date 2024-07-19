<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\BookingController;

Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/events', [EventController::class, 'Events'])->name('events');
Route::get('/documents/{slug}', [DocumentController::class, 'documents'])->name('documents');
Route::get('/membership', [MembershipController::class, 'Memberships'])->name('membership');
Route::get('/contacts', [ContactController::class, 'Contacts'])->name('contacts');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/bookings', [BookingController::class, 'Booking'])->name('booking');
Route::post('/membership', [MembershipController::class, 'store'])->name('membership.submit');
Route::get('/test-email', [ContactController::class, 'sendTestEmail']);

// Route::middleware([
    //     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
//     ])->group(function () {
    //         Route::get('/dashboard', function () {
//             return view('dashboard');
//         })->name('dashboard');
//     });



Route::get('/{StaticPage}', [StaticPageController::class, 'show'])->name('staticpage');
Route::get('/Team/{slug}', [SportController::class, 'SportsPlayerList'])->name('SportPlayerList');
Route::get('/blogs/{slug}', [HomeController::class, 'show'])->name('blog');
Route::get('/events/{slug}', [EventController::class, 'show'])->name('events_show');
