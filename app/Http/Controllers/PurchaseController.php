<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller{

    public function showShoppingCart(){
        return view("shopping-cart");
    }

    

}