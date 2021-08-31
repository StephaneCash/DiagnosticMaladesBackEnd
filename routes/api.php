<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaladiesController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\UserController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('maladies', App\Http\Controllers\MaladiesController::class)->except(['create', 'edit']);

Route::resource('doctors', App\Http\Controllers\DoctorsController::class)->except(['create', 'edit']);

Route::resource('users', App\Http\Controllers\UserController::class)->except(['create', 'edit']);