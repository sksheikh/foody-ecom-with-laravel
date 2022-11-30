<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/product',[ProductController::class,'product'])->name('product');

