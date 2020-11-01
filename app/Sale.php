<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Sale extends Model
{
    protected $fillable = ['total','subtotal','iva','quantity'];
    public function products(){
        return $this->belongsToMany('App\Product','product_sale');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
