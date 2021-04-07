<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProductController extends Controller
{
    public function redirect(){
        return redirect('/home');
    }

    public function home(){
        return view('time2share.home', [
            // 'product' => \App\Models\Product::all()
        ]);
    }

    public function index(){
        return view('time2share.index', [
            'product' => \App\Models\Product::all()
        ]);
    }

    public function show($id){
        return view('time2share.show', [
            'product' => \App\Models\Product::find($id)
        ]);
    }

    public function create() {
        return view('time2share.create', [
            'kind_of_product' => \App\Models\KindOfProduct::all(),
            'product' => \App\Models\Product::all(),
        ]);
    }

    public function store(Request $request, \App\Models\Product $product) {
        $product->name = $request->input('name');
        $product->kind_of_product = $request->input('kind_of_product');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->borrow_days = $request->input('borrow_days');
        $product->owner = Auth::user()->id;
        
        $product->save();

        return redirect('/products/create');
    }
}
