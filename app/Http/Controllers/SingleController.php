<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function show(Post $post)
    {
        return view('singlepost', [
            'post' => $post,
            'categories' => Category::get(),
        ]);
    }
}