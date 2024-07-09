<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApiController;

Route::get('/user/{id}/show', [UserController::class, 'show']);
Route::post('/store', [ApiController::class, 'store']);
Route::put('/user/{id}/update', [UserController::class, 'update']);
