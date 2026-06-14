<?php

use App\Http\Controllers\FrontendController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/',[FrontendController::class,'home']);
Route::get('/about',[FrontendController::class,'about']);
Route::get('/contact',[FrontendController::class,'contact']);
