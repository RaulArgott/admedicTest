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
        $totalQuantity = 0;
        $iva = $request->subtotal * 0.16;
        foreach($request->quantity as $q){
            $totalQuantity = $totalQuantity + $q;
        }
        $sale = \App\Sale::create([
            'total' => $request->total,
            'subtotal' => $request->subtotal,
            'iva' => $iva,
            'quantity' => $totalQuantity
        ]);
        if($request->product){
            foreach ($request->product as $k => $product){
                $p = \App\Product::find($product);
                $p->stock = $p->stock - $request->quantity[$k];
                $p->save();
                \App\ProductSale::create([
                    'product_id' => $product,
                    'quantity' => $request->quantity[$k],
                    'sale_id' =>$sale->id
                ]);
            }
        }
        return response()->json(["success"=>true,"data"=>$request->all()]);
    }
}
