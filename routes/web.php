<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

// Route Halaman Utama (Home)
Route::get('/', [ProdukController::class, 'home'])->name('home');

// Route Katalog & Detail Produk (Publik)
Route::get('/katalog', [ProdukController::class, 'index'])->name('katalog.index');
Route::get('/katalog/{id}', [ProdukController::class, 'show'])->name('katalog.show');

// Route Kelompok Admin (CRUD)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [ProdukController::class, 'admin'])->name('index');
    Route::get('/create', [ProdukController::class, 'create'])->name('create');
    Route::post('/store', [ProdukController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [ProdukController::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [ProdukController::class, 'update'])->name('update');
    Route::delete('/{id}', [ProdukController::class, 'destroy'])->name('destroy');
});
