<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class GetProductController extends Controller
{
    public function index(){
        // dd($requset->all());die();
        $product = Product::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get Product Successfully',
            'product' => $product
        ]);
    }
}
