<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function profile(){
        return view('frontend.partials.userprofile');
    }

    public function editProfile(Request $request){
//        dd($request->all());
        $data=[
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'address'=>$request->input('address'),
            'photo'=>$request->input('photo'),
        ];
        $user = auth()->user();
        $user->update($data);
        return redirect()->back();

    }


    public function logout(){
        auth()->logout();
        return redirect()->route('home');
    }

}
