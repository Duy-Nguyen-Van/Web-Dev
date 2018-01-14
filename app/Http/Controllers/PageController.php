<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserAccountRequest;
use App\Products;
use App\Type_products;
use App\User;
use Hash;

class PageController extends Controller
{
    public function getIndex() {
        $lastest = Products::select('*')->orderBy('id','desc')->take(3)->get();
        $sale = Products::where('promotion','<>','0')->orderBy('promotion','desc')->take(4)->get();
        return view('pages.index', compact('lastest', 'sale'));
    }

    public function getProducts($type) {
        $cate_product = Products::where('id_type',$type)->paginate(6);
        $sale = Products::where('promotion','<>','0')->orderBy('promotion','desc')->take(4)->get();
        return view('pages.products',compact('cate_product','sale'));
    }

    public function getSingle(Request $req) {
        $detail = Products::where('id',$req->id)->get();
        return view('pages.single',compact('detail'));
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

    public function postRegister(CreateUserAccountRequest $req) {
        $user = new User();
        $user->email = $req->txtEmail;
        $user->password = Hash::make($req->txtPassword);
        $user->remember_token = $req->_token;
        // $user->name = $req->txtName;
        $user->save();
        return view('page.register');
    }
}
