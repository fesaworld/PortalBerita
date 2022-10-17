<?php


namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class SingleController extends Controller
{

    public function index()
    {
        return view('main', [
            'title' => 'All Post',
            'posts' => Post::latest()->filter(request(['search', 'category']))->paginate(2)
        ]);
    }

    public function show(Post $post)
    {
        return view('singlepost', [
            'post' => $post,
            'categories' => Category::get(),
        ]);
    }
}