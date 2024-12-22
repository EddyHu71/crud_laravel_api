<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function saveNew() {
        return "saveNow";
    }

    public function index() {
        $dataProductDariModel = Product::all();
        return response()->json($dataProductDariModel);
    }

    public function showAll() {
        $dataProductDariModel = Product::all();
        return view('display', ["products" =>
        $dataProductDariModel]);
    }


}
