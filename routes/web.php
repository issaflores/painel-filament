<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Certifique-se de que o namespace está correto
Route::get('/users/{id}/show', [UserController::class, 'show']);
Route::post('/store', [UserController::class, 'store']);
