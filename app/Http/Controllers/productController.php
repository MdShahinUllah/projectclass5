<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function productForm(){
        return view('backend.partials.productForm');
    }
    public function  productFormData(Request $request){
//        dd($request->all());
        product::create([
            'name'=>$request->input('product_name'),
            'price'=>$request->input('price'),
            'description'=>$request->input('description'),
            'photo'=>$request->input('photo'),
        ]);
    }

}
