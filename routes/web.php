<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Penjadwalan\CalenderController;
use App\Http\Controllers\Penjadwalan\AntrianController;
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

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/kalender', [CalenderController::class, 'index'])->name('kalender');
    Route::get('/antrian', [AntrianController::class, 'index'])->name('antrian');
    

    Route::get('/rekam-medis', [MedicalRecordController::class, 'index'])->name('rekam-medis');

    Route::get('/users', [MasterDataUserController::class, 'index'])->name('users');
    Route::get('/users/create', [MasterDataUserController::class, 'create'])->name('users.create');

    Route::get('/clients', [MasterDataClientController::class, 'index'])->name('clients');
    Route::get('/clients/create', [MasterDataClientController::class, 'create'])->name('clients.create');
    Route::get('/clients/edit', [MasterDataClientController::class, 'edit'])->name('clients.edit');

    Route::get('/items', [MasterDataItemController::class, 'index'])->name('items');
    Route::get('/items/create', [MasterDataItemController::class, 'create'])->name('items.create');
    Route::get('/items/edit', [MasterDataItemController::class, 'edit'])->name('items.edit');
});

require __DIR__.'/auth.php';
