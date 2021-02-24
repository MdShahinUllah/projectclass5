<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index(){
        $users = \App\Models\User::orderBy('id','desc')->paginate(5)->withQueryString();
        return view('backend.partials.users',compact('users'));
    }
    public function profile(){
        return view('backend.partials.profile');
    }

    public function editProfile(Request $request){
        $data=[
          'name'=>$request->input('name'),
          'phone'=>$request->input('phone'),
          'address'=>$request->input('address'),
        ];
        $user= auth()->user();
        $user-> update($data);
        return redirect()->back();
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('admin');
    }
}
