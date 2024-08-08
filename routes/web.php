<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\MasterData\MasterDataUserController;
use App\Http\Controllers\MasterData\MasterDataClientController;
use App\Http\Controllers\MasterData\MasterDataItemController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/rekam-medis', [MedicalRecordController::class, 'index'])->name('medical-record');
    Route::get('/users', [MasterDataUserController::class, 'index'])->name('users');
    Route::get('/clients', [MasterDataClientController::class, 'index'])->name('clients');
    Route::get('/items', [MasterDataItemController::class, 'index'])->name('items');
});

require __DIR__.'/auth.php';
