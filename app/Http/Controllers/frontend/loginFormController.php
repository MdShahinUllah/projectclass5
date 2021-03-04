<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginFormController extends Controller
{
    public function index(Request $request){
//        dd($request->all());
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){
            return redirect()->route('home');
        }
        else{
            return redirect()->back();
        }

    }
}
