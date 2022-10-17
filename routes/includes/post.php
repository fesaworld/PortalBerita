<?php

use Illuminate\Support\Facades\Route;

Route::get('/post', 'PostController@index');
Route::get('/post/{id}', 'PostController@show');
Route::post('/post', 'PostController@store');
Route::post('/post/{id}', 'PostController@update');
Route::delete('/post/{id}', 'PostController@destroy');