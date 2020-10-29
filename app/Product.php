<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    private function sales(){
        return $this->belongsToMany('App\Sale','product_sale');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'categorie_id');
    }
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
    public function deparment(){
        return $this->belongsTo(Deparment::class);
    }
}
