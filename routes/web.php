<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WeddingController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\WishController;

use App\Http\Controllers\UndanganController;
use App\Http\Controllers\UcapanController;

use App\Http\Controllers\TamuNunuController;


// =====================================================
// UNDANGAN PERTAMA
// =====================================================

Route::get('/', [WeddingController::class, 'index'])
    ->name('home');


// =====================================================
// UCAPAN UNDANGAN PERTAMA
// =====================================================

Route::post('/wishes', [WishController::class, 'store'])
    ->name('wishes.store');


// =====================================================
// ADMIN TAMU UNDANGAN PERTAMA
// =====================================================

Route::get('/admin/tamu', [GuestController::class, 'index'])
    ->name('admin.index');

Route::post('/admin/tamu', [GuestController::class, 'store'])
    ->name('admin.store');

Route::delete('/admin/tamu/{guest}', [GuestController::class, 'destroy'])
    ->name('admin.destroy');


// =====================================================
// UNDANGAN NUNU
// =====================================================

Route::get('/undangan-nunu', [UndanganController::class, 'index'])
    ->name('undangan.nunu');


// =====================================================
// UCAPAN UNDANGAN NUNU
// =====================================================

Route::post('/ucapan', [UcapanController::class, 'store'])
    ->name('ucapan.store');


// =====================================================
// ADMIN TAMU NUNU
// =====================================================

Route::get('/admin/tamu-nunu', [TamuNunuController::class, 'index'])
    ->name('tamu.nunu.index');

Route::post('/admin/tamu-nunu', [TamuNunuController::class, 'store'])
    ->name('tamu.nunu.store');

Route::put('/admin/tamu-nunu/{tamuNunu}', [TamuNunuController::class, 'update'])
    ->name('tamu.nunu.update');

Route::delete('/admin/tamu-nunu/{tamuNunu}', [TamuNunuController::class, 'destroy'])
    ->name('tamu.nunu.destroy');