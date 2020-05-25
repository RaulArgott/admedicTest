<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Sale extends Model
{
    private function products(){
        return $this->belongsToMany('App\Product');
    }
}
