<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;

/*
|--------------------------------------------------------------------------
| Web Routes - Sistem Informasi Buku Tamu Kunjungan Industri
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('tamu.index');
});

/* =======================
   CRUD TAMU
======================= */

// READ (tampil data)
Route::get('/tamu', [TamuController::class, 'index'])->name('tamu.index');

// CREATE (form tambah)
Route::get('/tamu/create', [TamuController::class, 'create'])->name('tamu.create');

// STORE (simpan data)
Route::post('/tamu', [TamuController::class, 'store'])->name('tamu.store');

// EDIT (form edit)
Route::get('/tamu/{id}/edit', [TamuController::class, 'edit'])->name('tamu.edit');

// UPDATE (update data)
Route::put('/tamu/{id}', [TamuController::class, 'update'])->name('tamu.update');

// DELETE (hapus data)
Route::delete('/tamu/{id}', [TamuController::class, 'destroy'])->name('tamu.destroy');