<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\ContactController;


Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/Event', [EventController::class, 'Events'])->name('Events');
Route::get('/Document', [DocumentController::class, 'Documents'])->name('Documents');
Route::get('/Membership', [MembershipController::class, 'Memberships'])->name('Memberships');
Route::get('/Sports', [SportController::class, 'Sports'])->name('Sports');
Route::get('/Contacts', [ContactController::class, 'Contacts'])->name('Contacts');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
