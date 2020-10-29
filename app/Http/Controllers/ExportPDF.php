<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportPDF extends Controller
{
    public function invoice($id){

        $sale = \App\Sale::find($id);
        $info = \App\ProductSale::where('sale_id',$id)->get();
        $pdf = \PDF::loadView('invoice', compact('sale', 'info'));
        return $pdf->download('invoice'.$id.'.pdf');
    }
    public function productspdf(){
        $products = \App\Product::all();
        $pdf = \PDF::loadView('products', compact('products'));
        return $pdf->download('products.pdf');
    }
    public function loginspdf(){
        $logins = \App\Login::all();
        $pdf = \PDF::loadView('attendance', compact('logins'));
        return $pdf->download('attendance.pdf');
    }
}
