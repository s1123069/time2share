<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Models\Product;

class ProductController extends Controller
{
    public function redirect(){
        return redirect('/home');
    }

    public function home(){
        return view('time2share.home', [
            // 'product' => Product::all()
        ]);
    }

    public function index(){
        return view('time2share.index', [
            'product' => Product::all(),
        ]);
    }

    public function show($id){
        return view('time2share.show', [
            'product' => Product::find($id),
        ]);
    }

    public function create() {
        return view('time2share.create', [
            'kind_of_product' => \App\Models\KindOfProduct::all(),
            'product' => Product::all(),
        ]);
    }

    public function store(Request $request, Product $product) {

        if ($request->hasFile('image')) {
            $product->name = $request->input('name');
            $product->kind_of_product = $request->input('kind_of_product');
            $product->description = $request->input('description');
            $product->image_name = $request->file('image')->getClientOriginalName();
            $product->image_path = $request->input('image', './img/' . $product->image_name);

            $path = $request->file('image')->move('./img', $product->image_name);

            $product->borrow_days = $request->input('borrow_days');
            $product->owner = Auth::user()->id;
        
            $product->save();
            
            // return redirect('/products');
        }
        
        return redirect('/products/create');
    }
}
