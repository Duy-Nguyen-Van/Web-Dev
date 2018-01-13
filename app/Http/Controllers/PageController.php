<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Type_products;

class PageController extends Controller
{
    public function getIndex() {
        $lastest = Products::select('*')->orderBy('id','desc')->take(3)->get();
        $sale = Products::where('promotion','<>','0')->orderBy('promotion','desc')->take(6)->get();
        return view('pages.index', compact('lastest', 'sale'));
    }

    public function getProducts($type) {
        $cate_product = Products::where('id_type',$type)->paginate(6);
        $cate = Type_products::All();
        $sale_product = Products::where('promotion','<>','0')->orderBy('promotion','desc')->take(6)->get();
        return view('pages.products',compact('cate_product','cate','sale_product'));
    }

    public function getSingle(Request $req) {
        $Detail_product = Products::where('id',$req->id)->first();
        $sale_product = Products::where('promotion','<>','0')->orderBy('promotion','desc')->take(6)->get();
        $cate = Type_products::All();
        return view('pages.single',compact('Detail_product','sale_product','cate'));
    }

    public function getCheckout() {
        return view('pages.checkout');
    }

    public function getInformation() {
        return view('pages.information');
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function getAccount() {
        return view('pages.account');
    }

    public function getRegister() {
        return view('pages.register');
    }

}
