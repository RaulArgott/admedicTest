<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Product;

class POS extends Controller
{
    public function show(){
        $products = Product::where('stock','>','0')->get();
        return view('POS.show',compact('products'));
    }
    public function cart(Request $request){
        $products = json_decode($request->json()->all());
        return response()->json($users);
    }
    public function cartSell(Request $request){
        $products = json_decode($request->json()->all());
        
    }
}
