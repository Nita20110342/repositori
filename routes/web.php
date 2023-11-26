<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', UserController::class);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::get('/user/delete', [UserController::class, 'destroy']);
Route::get('/user/update', [UserController::class, 'update']);
Route::get('/user/read', [UserController::class, 'show']);
