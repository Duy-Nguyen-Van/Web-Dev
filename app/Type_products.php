<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_products extends Model
{
    //Connect to table type_products
    protected $table = 'type_products';

    public function product() {
    	return $this->hasMany('App\Products');
    }
}
