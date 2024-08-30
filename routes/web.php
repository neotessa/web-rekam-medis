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

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // rekam medis
    Route::get('/rekam-medis', [MedicalRecordController::class, 'index'])->name('medical-record');
    Route::get('/rekam-medis/detail', [MedicalRecordController::class, 'detail'])->name('medical-record.detail');

    // penjadwalan
    Route::prefix('penjadwalan')->group(function () {
        Route::get('/kalender', [CalenderController::class, 'index'])->name('kalender');

        Route::group(['prefix' => 'antrian'], function () {
            Route::get('/terjadwal', [AntrianController::class, 'index'])->name('antrian');

            // Create
            Route::get('/create', [AntrianController::class, 'create'])->name('antrian.create');
            Route::post('/create', [AntrianController::class, 'store'])->name('antrian.create');

            // Edit
            Route::get('/edit/{id}', [AntrianController::class, 'update'])->name('antrian.update');
            Route::put('/edit/{id}', [AntrianController::class, 'edit'])->name('antrian.edit');

            // Delete
            Route::delete('/delete/{id}', [AntrianController::class, 'destroy'])->name('antrian.destroy');
        });
    });

    // masterdata
    Route::prefix('master-data')->group(function () {
        Route::get('/users', [MasterDataUserController::class, 'index'])->name('users');
        Route::get('/users/create', [MasterDataUserController::class, 'create'])->name('users.create');

        Route::get('/clients', [MasterDataClientController::class, 'index'])->name('clients');
        Route::get('/clients/create', [MasterDataClientController::class, 'create'])->name('clients.create');
        Route::get('/clients/edit', [MasterDataClientController::class, 'edit'])->name('clients.edit');

        Route::get('/items', [MasterDataItemController::class, 'index'])->name('items');
        Route::get('/items/create', [MasterDataItemController::class, 'create'])->name('items.create');
        Route::get('/items/edit', [MasterDataItemController::class, 'edit'])->name('items.edit');
    });
});

require __DIR__.'/auth.php';
