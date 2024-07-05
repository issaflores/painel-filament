<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/user/{id}/show', [ApiController::class, 'show']);
Route::post('/user/store', [ApiController::class, 'store']);

