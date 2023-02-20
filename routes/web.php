<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeaderController;

//Front routes
Route::get('/',[FrontController::class,'home'])->name('home');
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('/product',[FrontController::class,'product'])->name('product');
Route::get('/blog',[FrontController::class,'blog'])->name('blog');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Dashboard routes
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    //Header routes
    Route::get('/header-top',[HeaderController::class,'topHeader'])->name('top-header');
    Route::post('/header-top-left',[HeaderController::class,'addTopLeftHeader'])->name('add-top-left-header');

//    Slider Routes
    Route::get('/add-slider',[DashboardController::class,'addSlider'])->name('add-slider');
    Route::post('/create-slider',[DashboardController::class,'createSlider'])->name('create-slider');
    Route::get('/manage-slide',[DashboardController::class,'manageSlide'])->name('manage-slide');
});
