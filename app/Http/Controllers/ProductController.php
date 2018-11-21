<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        return 'ini product index';
        // redirect()->route('tes_any');
    }
    public function match()
    {
        return 'ini product match';
    }
    public function any($param1, $param2)
    {
        return 'ini product any dengan params '. $param1 . ' - ' . $param2;
    }

    public function showAll()
    {
        // $dataProductDariModel = Product::all();
        return view('product.display',[
            // 'products' => $dataProductDariModel
        ]);

    }

    public function saveNew()
    {

    }

    public function search(Request $request)
    {
        $keyword = $request->get("product_name");

        return $keyword;

    // Lalu kita akan mencari ke tabel product berdasarkan product.name == $keyword
    }
}
