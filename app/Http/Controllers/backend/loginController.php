<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('backend.partials.login');
    }
    public function submit(Request $request){
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){
            return redirect()->route('admin');
        }
        else{
            return redirect()->back();
        }
    }

}

