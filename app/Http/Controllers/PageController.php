<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
class PageController extends Controller
{
    //
    public function getIndex() {
        return view('pages.index');
    }

    //
    public function getProducts() {
        $a = Products::select('*')->paginate(6);
        return view('pages.products', compact('a'));
    }

    public function getTshirt() {
        $a = Products::select('*')->where('id_type', 1)->paginate(6);
        return view('pages.t-shirt', compact('a'));
    }

    public function getShirt() {
        $a = Products::select('*')->where('id_type', 2)->paginate(6);
        return view('pages.shirt', compact('a'));
    }
}
