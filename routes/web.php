<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\ProductController::class,'create'])->name('home');
Route::post('/', [\App\Http\Controllers\ProductController::class,'store'])->name('home.store');
Route::get('/showProduct',[\App\Http\Controllers\ProductController::class,'index'])->name('showProduct');
Route::delete('deleteProduct/{id}',[\App\Http\Controllers\ProductController::class,'destroy'])->name('showProduct.destroy');
