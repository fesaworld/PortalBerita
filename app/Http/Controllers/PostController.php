<?php

namespace App\Http\Controllers;

use App\Post;
use Exception;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;

class PostController extends Controller
{
    public function index()
    {
        $categorys = DB::table('categorys')->get();

        $data = [
            'categorys'         => $categorys,
            'script'            => 'components.scripts.post'
        ];

        return view('pages.post', $data);
    }

    public function store(Request $request)
    {
        if ($request->title == NULL) {
            $json = [
                'msg'       => 'Mohon masukan judul post',
                'status'    => false
            ];
        } elseif (!$request->has('category_id')) {
            $json = [
                'msg'       => 'Mohon pilih kategori post',
                'status'    => false
            ];
        } elseif (!$request->has('body')) {
            $json = [
                'msg'       => 'Mohon masukan isi post',
                'status'    => false
            ];
        } else {
            try {
                DB::transaction(function () use ($request) {
                    DB::table('posts')->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'title' => $request->title,
                        'category_id' => $request->category_id,
                        'slug' => Str::slug($request->title, '-'),
                        'body' => $request->body,
                        'image' => $request->image,
                    ]);
                });

                $json = [
                    'msg' => 'Kategori berhasil ditambahkan',
                    'status' => true
                ];
            } catch (Exception $e) {
                $json = [
                    'msg'       => 'Data belhum lengkap',
                    'status'    => false,
                    'e'         => $e
                ];
            }
        }

        return Response::json($json);
    }

    public function show($id)
    {
        if (is_numeric($id)) {
            $data = DB::table('posts')->where('id', $id)->first();

            return Response::json($data);
        }

        $data = DB::table('posts')
            ->join('categorys', 'categorys.id', '=', 'posts.category_id')
            ->select([
                'posts.*', 'categorys.category_name as post_category'
            ])
            ->orderBy('posts.id', 'desc');

        return DataTables::of($data)
            ->addColumn(
                'action',
                function ($row) {
                    $data = [
                        'id' => $row->id
                    ];

                    return view('components.buttons.post', $data);
                }
            )
            ->addIndexColumn()
            ->make(true);
    }

    public function update(Request $request, $id)
    {
        if ($request->title == NULL) {
            $json = [
                'msg'       => 'Mohon masukan judul post',
                'status'    => false
            ];
        } elseif (!$request->has('category_id')) {
            $json = [
                'msg'       => 'Mohon pilih kategori post',
                'status'    => false
            ];
        } elseif (!$request->has('body')) {
            $json = [
                'msg'       => 'Mohon masukan isi post',
                'status'    => false
            ];
        } else {
            try {
                DB::transaction(function () use ($request, $id) {
                    DB::table('posts')->where('id', $id)->update([
                        'updated_at' => date('Y-m-d H:i:s'),
                        'title' => $request->title,
                        'category_id' => $request->category_id,
                        'slug' => Str::slug($request->title, '-'),
                        'body' => $request->body,
                        'image' => $request->image,
                    ]);
                });

                $json = [
                    'msg' => 'Produk berhasil disunting',
                    'status' => true
                ];
            } catch (Exception $e) {
                $json = [
                    'msg'       => 'error',
                    'status'    => false,
                    'e'         => $e
                ];
            }
        }

        return Response::json($json);
    }

    public function destroy($id)
    {
        try {
            DB::transaction(function () use ($id) {
                DB::table('posts')->where('id', $id)->delete();
            });

            $json = [
                'msg' => 'Kategori berhasil dihapus',
                'status' => true
            ];
        } catch (Exception $e) {
            $json = [
                'msg' => 'error',
                'status' => false,
                'e' => $e,
            ];
        };

        return Response::json($json);
    }
}