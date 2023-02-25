<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;


//Front routes
Route::get('/',[FrontController::class,'home'])->name('home');
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('/product',[FrontController::class,'product'])->name('product');
Route::get('/blog',[FrontController::class,'blog'])->name('blog');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');





