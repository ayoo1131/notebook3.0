<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


//Main Webpage
Route::post('/login', [AuthController::class, 'hello']);

Route::get('/', function () {
    return view('welcome');
});