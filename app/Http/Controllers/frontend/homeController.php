<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view('frontend.home');
    }

    public function productDetail(){
        return view('frontend.product-detail');
    }

    public function contactUs(){
        return view('frontend.contact-us');
    }

    public function contactUs2(){
        return view('frontend.contact-us-2');
    }
}
