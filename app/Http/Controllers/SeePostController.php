<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class SeePostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->orderBy('posts.id', 'desc')->get();

        return view('pages.seePost', ['posts' => $posts]);
    }

    public function show($post)
    {
        $post = DB::table('posts')->where('slug', $post)->first();

        return view('pages.seePostDetail', ['post' => $post]);
    }
}