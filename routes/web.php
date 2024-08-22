<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\ProductController::class,'create'])->name('home');
Route::post('/', [\App\Http\Controllers\ProductController::class,'store'])->name('home.store');
Route::get('/showProduct',[\App\Http\Controllers\ProductController::class,'index'])->name('showProduct');
