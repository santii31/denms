<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductWaist;
use App\ColorProduct;
use DB;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('isAdmin');
    }

    public function dashboard(){
        return view('admin');
    }

    public function addProductPath(){
        $colors = DB::table('colors')->get();
        $waists = DB::table('waists')->get();
        $categories = DB::table('categories')->get();
        return view('add-product', compact('colors', 'waists', 'categories'));
    }


    
    public function addProduct(Request $request){
        
        if($request->hasFile('photo1')){
            $photo1 = $request->file('photo1');
            $name1 = time().$photo1->getClientOriginalName();
            $photo1->move('images', $name1);
        }

        if($request->hasFile('photo2')){
            $photo2 = $request->file('photo2');
            $name2 = time().$photo2->getClientOriginalName();
            $photo2->move('images', $name2);
        }
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->genre = $request->genre;
        $product->discount = $request->discount;
        $product->category_id = $request->category;
        $product->photo1 = $name1;
        $product->photo2 = $name2;
        $product->save();
        $lastInserted = Product::latest('id')->first();
        
        $product_waist = new ProductWaist;
        $product_waist->product_id = $lastInserted->id;
        $product_waist->waist_id = $request->waist;
        $product_waist->quantity = $request->quantity;
        $product_waist->save();

        $color_product = new ColorProduct;
        $color_product->product_id = $lastInserted->id;
        $color_product->color_id=$request->color;
        $color_product->quantity = $request->quantity;
        $color_product->save();




        
        
        
    }
}
