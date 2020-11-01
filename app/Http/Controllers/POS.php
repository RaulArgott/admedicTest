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
        /* if($request->product){
            foreach ($request->product as $k => $product){
                $p = \App\Product::find($product);
                $p->stock = $p->stock - $request->stock[$product];
                $p->save();
                \App\ProductSale::create([
                    'product_id' => $product,
                    'quantity' => $request->stock[$product],
                    'sale_id' => $data->id
                ]);

            }
        } */
        print_r(json_decode($request->getContent(),true));
        return response()->json(["success"=>true,"data"=>$request->getContent()]);
    }
}
