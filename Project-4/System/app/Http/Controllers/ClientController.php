<?php

namespace App\Http\Controllers;
use App\Models\produk;

class ClientController extends Controller{
    function showIndex(){
        return view('template.index');
    }
    function showProduk(){
        $data['list_produk'] = Produk::all();
        return view('template.product-list',$data);
    }
    function showDetail(){
        $data['list_produk'] = Produk::all();
        return view('template.product-detail',$data);
    }
    function showCart(){
        return view('template.cart',);
    }
    function showCheckout(){
        return view('template.checkout');
    }
    function showMyaccount(){
        return view('template.my-account');
    }
    function showMorepages(){
        return view('template.more-pages');
    }
    function showWishlist(){
        return view('template.wishlist');
    }
    function showContact(){
        return view('template.contact');
    }
    function showLogin(){
        return view('template.login');
    }
}