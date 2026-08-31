<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ContactLocationController;

// FRONTEND
Route::get('/', [ProfileController::class, 'index'])->name('profile');

Route::get('/frontend.event', [EventController::class, 'index'])->name('event');

Route::get('/frontend.galeri', [GaleriController::class, 'index'])->name('galeri');

Route::get('/frontend.kontaklokasi', [ContactLocationController::class, 'index'])->name('kontaklokasi');

// ADMIN ROUTES
Route::prefix('admin')->group(function () {
    require __DIR__ . '/admin.php';
});
