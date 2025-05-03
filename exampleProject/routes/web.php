<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LandingController;

Route::get('/',[HomePageController::class,'index'])->name('home');
Route::get('/landing',[LandingController::class,'index'])->name('landing');


