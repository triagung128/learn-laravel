<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAll() {
        $dataProductDariModel = Product::all();
        return view('product.display', ["products" => $dataProductDariModel]);
    }

    public function saveNew(Request $request) {

    }
}
