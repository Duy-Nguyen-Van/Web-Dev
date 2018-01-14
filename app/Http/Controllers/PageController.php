<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserAccountRequest;
use App\Products;
use App\Type_products;
use App\User;
use Hash;
use Cart;

class PageController extends Controller
{
    public function getIndex() {
        $lastest = Products::select('*')->orderBy('id','desc')->take(3)->get();
        $sale = Products::where('promotion','<>','0')->orderBy('promotion','desc')->take(4)->get();
        return view('pages.index', compact('lastest', 'sale'));
    }

    public function getProducts($type) {
        if($type == 0) {
            $cate_product = Products::select('*')->paginate(6);
            $sale = Products::where('promotion','<>','0')->orderBy('promotion','desc')->take(4)->get();
            return view('pages.products',compact('cate_product','sale'));
        }
        else {
            $cate_product = Products::where('id_type',$type)->paginate(6);
            $sale = Products::where('promotion','<>','0')->orderBy('promotion','desc')->take(4)->get();
            return view('pages.products',compact('cate_product','sale'));
        }
    }

    public function getSingle(Request $req) {
        $detail = Products::where('id',$req->id)->get();
        return view('pages.single',compact('detail'));
    }

    public function getCheckout() {
        $content = Cart::content();
        $total = Cart::subtotal();
        return view('pages.checkout',compact('content','total'));
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
        $user->name = $req->txtName;
        $user->save();
        return view('pages.register')->with(['flash_level'=>'success','flash_message'=>'Tạo tài khoản thành công!']);
    }

    public function getAddProductToCart($id) {
        $product_buy = Products::where('id', $id)->first();
        if ($product_buy->promotion == 0) {
            $productPrice = $product_buy->price;
        }
        else {
            $productPrice = $product_buy->promotion;
        }
        Cart::add(array('id'=>$id, 'name'=>$product_buy->name, 'qty'=>1, 'price'=>$productPrice, 
            'options'=>array('img'=>$product_buy->image)));
        $content = Cart::content();
        $total = Cart::total();
        return redirect()->back();
    }

    public function getCart() {
        $content = Cart::content();
        $total = Cart::subtotal();
        return view('pages.information', compact('content', 'total'));
    }

    public function getDeleteCart($id) {
        Cart::remove($id);
        return redirect()->route('checkout');
    }

    public function getDeleteAll() {
        Cart::destroy();
        return redirect()->route('index');
    }

    public function getCartDetail() {
        return view('pages.information');
    }
}
