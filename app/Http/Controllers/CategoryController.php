<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            'script' => 'components.scripts.category'
        ];

        return view('pages.category', $data);
    }

    public function store(Request $request)
    {
        if($request->name == NULL) {
            $json = [
                'msg'       => 'Mohon masukan nama kategori',
                'status'    => false
            ];
        } elseif($request->detail == NULL) {
            $json = [
                'msg'       => 'Mohon masukan detail kategori',
                'status'    => false
            ];
        } else {
            try{
                DB::transaction(function() use($request) {
                    DB::table('categorys')->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'category_name' => $request->name,
                        'category_detail' => $request->detail,
                        'category_slug' => Str::slug($request->name, '-'),
                    ]);
                });

                $json = [
                    'msg' => 'Kategori berhasil ditambahkan',
                    'status' => true
                ];
            } catch(Exception $e) {
                $json = [
                    'msg'       => 'error',
                    'status'    => false,
                    'e'         => $e
                ];
            }
        }

        return Response::json($json);
    }

    public function show($id) {
        if(is_numeric($id))
        {
            $data = DB::table('categorys')->where('id', $id)->first();

            return Response::json($data);
        }

        $data = DB::table('categorys')
            ->select(['categorys.*'])
        ->orderBy('categorys.id', 'desc');

        return DataTables::of($data)
            ->addColumn(
                'action',
                function($row) {
                    $data = [
                        'id' => $row->id
                    ];

                    return view('components.buttons.category', $data);
                }
            )
            ->addIndexColumn()
            ->make(true);
    }

    public function update(Request $request, $id)
    {
        if($request->name == NULL) {
            $json = [
                'msg'       => 'Mohon masukan nama kategori',
                'status'    => false
            ];
        } elseif($request->detail == NULL) {
            $json = [
                'msg'       => 'Mohon masukan detail kategori',
                'status'    => false
            ];
        } else {
            try{
                DB::transaction(function() use($request, $id) {
                    DB::table('categorys')->where('id', $id)->update([
                        'updated_at' => date('Y-m-d H:i:s'),
                        'category_name' => $request->name,
                        'category_detail' => $request->detail,
                        'category_slug' => Str::slug($request->name, '-'),
                    ]);
                });

                $json = [
                    'msg' => 'Produk berhasil disunting',
                    'status' => true
                ];
            } catch(Exception $e) {
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
        try{
            DB::transaction(function() use($id){
                DB::table('categorys')->where('id', $id)->delete();
            });

            $json = [
                'msg' => 'Kategori berhasil dihapus',
                'status' => true
            ];
        } catch(Exception $e){
            $json = [
                'msg' => 'error',
                'status' => false,
                'e' => $e,
            ];
        };

        return Response::json($json);
    }
}
