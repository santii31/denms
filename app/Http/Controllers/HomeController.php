<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $confirm = false;
        $user=Auth::user();
        if($user != null){
            if($user->isAdmin()){
                return view('admin', compact('user'));
            }else{
                $confirm = true;
                $products = DB::table('products')->get();
                $categories = DB::table('categories')->get();
                return view('home', compact('user', 'products', 'categories')); 
            }
        }

        $products = DB::table('products')->get();
        $categories = DB::table('categories')->get();
        return view('home', compact('user', 'products', 'categories'));        
        
    }
}
