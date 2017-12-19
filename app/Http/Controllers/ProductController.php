<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $product = DB::table('products')->select('id','product_name','category','price','image_url')->orderBy('id','DESC')->skip(0)->take(4)->get();
        return view('user.pages.home',compact('product'));
    }
    public function loaisanpham()
    {
    	return view('user.pages.cate');
    }
}
