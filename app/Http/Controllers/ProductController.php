<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Models\Product;
use \App\Models\Borrow;
use Exception;
use DB;


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
        $user = Auth::user()->id;
        return view('time2share.index', [
            // 'product' => Product::all(),
            'product' => Product::all()->where('owner' , '!=' , $user)->where('borrowed' , '==' , false),
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
            // 'product' => Product::all(),
        ]);
    }

    public function owned(){
        $user = Auth::user()->id;
        $producten = DB::table('products')->join('borrow', 'products.id', '=', 'borrow.id')->get();
        $owned_product = Product::all()->where('owner', $user);
        $loaned_product = $producten->where('borrowed', '==', true)->where('borrower', '==', $user);

        return view('time2share.owned', [
            'owned_products' => $owned_product,
            'loaned_products' => $loaned_product,
        ]);
    }

    public function store(Request $request, Product $product) {

        if ($request->hasFile('image')) {
            $product->name = $request->input('name');
            $product->kind_of_product = $request->input('kind_of_product');
            $product->description = $request->input('description');
            $product->image_name = $request->file('image')->getClientOriginalName();
            $product->image_path = $request->input('image', '/img/' . $product->image_name);

            $path = $request->file('image')->move('./img', $product->image_name);

            $product->borrow_days = $request->input('borrow_days');
            $product->owner = Auth::user()->id;
          
            try{
                $product->save();
                return redirect('/products');
            }
            catch(Exception $e){
                return redirect('/products/create');
            }
            // return redirect('/products');
        }
        
        return redirect('/products/create');
    }


    public function loan($id, Borrow $borrow, Product $product) {
        
        $borrow->id = Product::find($id)->id;
        $borrow->borrower = Auth::user()->id;
        $borrow->owner = Product::find($id)->owner;
        $borrow->save();

        $product = Product::find($id);
        $product->borrowed = true;
        $product->save();
        // $borrowed->save();
        // return view('time2share.myloans', [
        //     'id' => Product::find($id)->id,
        //     'borrower' => Auth::user()->id,
        //     'owner' => Product::find($id)->owner,
        //     'borrow' => Borrow::all(),
        // ]);

        // <h1>{{$id}}</h1>
        // <h1>{{$borrower}}</h1>
        // <h1>{{$owner}}</h1>

        return redirect('/myproducts');
        
    }

}
