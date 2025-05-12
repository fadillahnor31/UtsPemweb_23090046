<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Rute dashboard dengan middleware auth dan verified
Route::get('dashboard', [ProductController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Rute untuk create, store, edit, update, show, dan destroy produk
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard/products/create', [ProductController::class, 'create'])->name('create');
    Route::post('dashboard/products', [ProductController::class, 'store'])->name('store');
    Route::get('dashboard/products/{product}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('dashboard/products/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('dashboard/products/{product}', [ProductController::class, 'destroy'])->name('destroy');

    
    // Menampilkan produk di dashboard
    Route::get('dashboard/products', [ProductController::class, 'index'])->name('index');
});

// Rute pengaturan pengguna
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

// Rute autentikasi
require __DIR__.'/auth.php';
