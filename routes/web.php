<?php

use App\Post;
use App\Category;
use Illuminate\Support\Facades\Route;

require_once('includes/auth.php');

Route::get('/', 'SingleController@index');
Route::get('/single/{post:slug}', 'SingleController@show');
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:category_slug}', function (Category $category) {
    return view('main', [
        'title' => "Post by Category : " . $category->category_name,
        'posts' => Post::whereHas('category', function ($q) use ($category) {
            $q->where('category_id', $category->id);
        })->latest()->filter(request(['search', 'category']))->paginate(2),
    ]);
});

Route::group([
    'middleware' => 'auth',
], function () {
    require_once('includes/category.php');
    require_once('includes/post.php');
    require_once('includes/seePost.php');
});