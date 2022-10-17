<?php

use Illuminate\Support\Facades\Route;

Route::get('/seePost', 'SeePostController@index')->name('posts');
Route::get('/seePost/{post:slug}', 'SeePostController@show')->name('show');
