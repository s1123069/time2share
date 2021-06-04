<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Models\Product;
use \App\Models\Borrow;
use \App\Models\User;
use \App\Models\Review;
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
            'loaned_out_products' => Product::all()->where('owner', $user)->where('borrowed', '==', true),
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

        return redirect('/myproducts');
        
    }

    public function returnProduct($id){
        $id = Borrow::find($id)->id;
        DB::update('UPDATE borrow SET at_borrower = false WHERE id = ?', [$id]);
        DB::update('UPDATE products SET give_back = true WHERE id = ?', [$id]);

        return redirect('/myproducts');
    }

    public function returnAccepted($id) {
        DB::table('borrow')->where('id', '=', $id)->delete();
        DB::update('UPDATE products SET borrowed = false WHERE id = ?', [$id]);
        DB::update('UPDATE products SET give_back = false WHERE id = ?', [$id]);

        $user = Auth::user()->id;
        $producten = DB::table('products')->join('borrow', 'products.id', '=', 'borrow.id')->get();
        $owned_product = Product::all()->where('owner', $user);
        $loaned_product = $producten->where('borrowed', '==', true)->where('borrower', '==', $user);

        return view('time2share.owned', [
            'owned_products' => $owned_product,
            'loaned_products' => $loaned_product,
            'loaned_out_products' => Product::all()->where('owner', $user)->where('borrowed', '==', true),
        ]);
    }


    public function profile($id) {
        return view('time2share.users', [
            'product' => Product::all()->where('owner', '=', $id)->where('borrowed', '==', false),
            'user' => User::where('id', '=', $id)->get()->first(),
            'review' => Review::all()->where('user_id', '=', $id)
        ]);
    }

    public function review($id) {
        return view('time2share.reviewForm', [
            'user' => User::where('id', '=', $id)->get()->first()
        ]);
    }

    public function reviewed(Request $request, Review $review, $id){
        $review->user_id = $id;
        $review->review_by = Auth::user()->name;
        $review->name = $request->input('name');
        $review->description = $request->input('description');
        $review->score = $request->input('score');
        
        try {
            $review->save();
            return redirect('/myproducts');
        } catch(Exception $e) {
            return redirect('/myproducts');
        }
    }

}
