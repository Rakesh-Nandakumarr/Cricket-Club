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
Route::get('/documents', [DocumentController::class, 'Documents'])->name('documents');
Route::get('/membership', [MembershipController::class, 'Memberships'])->name('membership');
Route::get('/sports', [SportController::class, 'Sportslist'])->name('sports');
Route::get('/contacts', [ContactController::class, 'Contacts'])->name('contacts');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/bookings', [BookingController::class, 'Booking'])->name('booking');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });


Route::get('/blog/{blog}', [HomeController::class, 'show'])->name('blog');
Route::get('/{slug}', [StaticPageController::class, 'show'])->name('static-page');