<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\HeaderController;
use App\Http\Controllers\backend\SliderController;

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



    //Slider Routes
    Route::resource('sliders',SliderController::class);
});
