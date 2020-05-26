<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    private function sales(){
        return $this->belongsToMany('App\Sale','product_sale');
    }
}
