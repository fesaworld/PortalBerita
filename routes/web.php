<?php

use Illuminate\Support\Facades\Route;

require_once('includes/auth.php');

Route::get('/single/{post:slug}', 'SingleController@show');

Route::group([
    'middleware' => 'auth',
], function () {
    require_once('includes/category.php');
    require_once('includes/post.php');
    require_once('includes/seePost.php');
});