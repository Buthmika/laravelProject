<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LandingController;

Route::get('/',[HomePageController::class,'index'])->name('home');
Route::prefix('/landing')->group (function() {
    Route::get('/',[LandingController::class,'index'])->name('landing');
    Route::post('/store',[LandingController::class,'store'])->name('landing.store');


});


