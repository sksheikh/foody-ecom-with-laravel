<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

//Front routes
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/product',[ProductController::class,'index'])->name('product');
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/contact',[ContactController::class,'index'])->name('contact');

