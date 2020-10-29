<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Product;

class POS extends Controller
{
    public function show(){
        $products = Product::where('stock','>','0')->get();
        return \Response::json($products);
    }
    public function cart(Request $request){
        $users = json_decode($request->json()->all());
        return response()->json($users);
    }
}
