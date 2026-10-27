<?php

use App\Http\Controllers\Api\MobilController;
use Illuminate\Support\Facades\Route;

Route::get('/mobil', [MobilController::class, 'index'])->name('mobil.index');
Route::get('/mobil/{mobil}', [MobilController::class, 'show'])->name('mobil.show');
Route::post('/mobil', [MobilController::class, 'store'])->name('mobil.store');
Route::match(['put', 'patch'], '/mobil/{mobil}', [MobilController::class, 'update'])->name('mobil.update');
Route::delete('/mobil/{mobil}', [MobilController::class, 'destroy'])->name('mobil.destroy');
