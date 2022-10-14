<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            'script' => 'components.scripts.product'
        ];

        return view('pages.product', $data);
    }

    public function show($id) {
        if(is_numeric($id))
        {

        }

        $data = DB::table('products')
            ->join('product_categories', 'product_categories.id', '=', 'products.product_category_id')
            ->select(['products.*', 'product_categories.name as product_category'
        ])
        ->orderBy('products.id', 'desc');

        return DataTables::of($data)
            ->editColumn(
                'price',
                function($row) {
                    return number_format($row->price);
                }
            )
            ->addColumn(
                'action',
                function($row) {
                    $data = [
                        'id' => $row->id
                    ];

                    return view('components.buttons.product', $data);
                }
            )
            ->addIndexColumn()
            ->make(true);
    }
}
