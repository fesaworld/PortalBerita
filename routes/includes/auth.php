<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'guest',
], function () {
    Route::get('/login', 'AuthController@loginUser');
    Route::post('/', 'AuthController@login');
});

Route::group([
    'middleware' => 'auth',
], function () {
    Route::get('/logout', 'AuthController@logout');
});