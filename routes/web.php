<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\GalleryController;

// Switch Bahasa
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');

// Halaman Depan / Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Management Admin (Upload Service & Gallery)
Route::prefix('admin')->group(function () {
    Route::get('/services', [ServiceController::class, 'index'])->name('admin.services.index');
    Route::post('/services', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

    Route::get('/galleries', [GalleryController::class, 'index'])->name('admin.galleries.index');
    Route::post('/galleries', [GalleryController::class, 'store'])->name('admin.galleries.store');
    Route::delete('/galleries/{id}', [GalleryController::class, 'destroy'])->name('admin.galleries.destroy');
});