<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //Connect to table products
    protected $table = 'products';

    public function cate(){
    	return $this->belongTo('App\Type_products');
    }
}
