<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
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
}
