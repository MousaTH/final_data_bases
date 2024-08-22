<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\ProductController::class,'create'])->name('index');
Route::post('/', [\App\Http\Controllers\ProductController::class,'store'])->name('index.store');
Route::get('/showProduct',[\App\Http\Controllers\ProductController::class,'index'])->name('showProduct');
