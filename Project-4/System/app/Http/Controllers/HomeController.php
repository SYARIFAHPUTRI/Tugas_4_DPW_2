<?php

namespace App\http\Controllers;

class HomeController extends Controller {


    function showDashboard(){
        return view('admin.section.dashboard');
    }

    function showProduct(){
        return view('produk');
    }

    function showDiskon(){
        return view('diskon');
    }

    function showKategori(){
        return view('admin.section.kategori');
    }

    function showLogin(){
        return view('login');
    }

    function showSupplier(){
        return view('supplier');
    }

    function showPelanggan(){
        return view('pelanggan');
    }

    



}