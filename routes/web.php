<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/store', 'UserController@store');
