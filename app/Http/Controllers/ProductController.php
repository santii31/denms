<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Waist;
use App\Color;
use App\ProductWaist;

class ProductController extends Controller{

    public function showCataloge(){
        return view("cataloge");
    }

    public function productSheet($product_id){
        if($product_id != null){
            $product_data = Product::where('id', $product_id)->get();
            $product = new Product;
            $max = 0;

            $product = $product_data[0];

            $waistQuantity = count($product->waists);

            $waist = new Waist;
            $waists = array();
            /*for($i=0; $i<$waistQuantity; $i++){
                $waist->id = $product->waists[$i]->id;
                $waist->name = $product->waists[$i]->name;
                $waist->quantity = $product->waists[$i]->quantity;
                echo $product->waists[$i]->quantity;
                array_push($waists,$waist);
            }*/


            $product_waist = new ProductWaist;

            $colorQuantity = count($product->colors);

            $color = new Color;
            $colors = array();
            for($i=0; $i<$colorQuantity; $i++){
                $color->id = $product->colors[$i]->id;
                $color->name = $product->colors[$i]->name;
                $color->quantity = $product->colors[$i]->quantity;
                array_push($colors,$color);
            }

            
            //return view('product', compact('product', 'waists', 'waistQuantity', 'colors', 'max'));


            
        }
    }






    public function addProductPath(){
        return view('add-product');
    }

    

}