<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/uploadpage',[PageController::class,'uploadpage']);

Route::post('/uploadproduct',[PageController::class,'store']);

Route::get('/show',[PageController::class,'show']);

Route::get('/download/{file}',[PageController::class,'download']);

Route::get('/view/{is}',[PageController::class,'view']);
