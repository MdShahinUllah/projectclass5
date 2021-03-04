<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use function PHPUnit\Framework\fileExists;

class productController extends Controller
{
    public function product(){

        $products = product::orderBy('id','desc')->paginate(5);
        return view('backend.product.products',compact('products'));

    }

    public function create(){
        return view('backend.product.create');
    }

    public function store(Request $request){
        $photo=$request->file('photo');
        $filename = time().'_product'.$photo->getClientOriginalExtension();
        $request->photo->move('uploads',$filename);
        product::create([
            'name'=>$request->input('product_name'),
            'price'=>$request->input('price'),
            'description'=>$request->input('description'),
            'photo'=>$filename
        ]);
        return redirect()->route('admin.product');
    }

    public function edit($id){
        $product = product::find($id);
        return view('backend.product.edit',compact('product'));
    }

    public function update(Request $request, $id){
        $product = product::find($id);
        $product->update([
            'name'=>$request->input('product_name'),
            'price'=>$request->input('price'),
            'description'=>$request->input('description'),
        ]);
        if ($request->file('photo')){
            if (file_exists('uploads/'. $product->photo)){
                unlink('uploads/'. $product->photo);
            };
        };
        $photo=$request->file('photo');
        $filename = time().'_product'.$photo->getClientOriginalExtension();
        $request->photo->move('uploads',$filename);
        return redirect()->route('admin.product');

    }



}
