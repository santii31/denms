<?php

use Illuminate\Support\Facades\Route;
use App\Waist;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','HomeController@index');
Route::get('/Cataloge','ProductController@showCataloge');
Route::get('/Product','ProductController@showProduct');
Route::get('/Purchase','PurchaseController@showShoppingCart');
Route::get('/santi/{id}','PurchaseController@sant');

Route::get('/read', function(){
    /* getAll
    $products = Product::all();
    foreach($products as $product){
        echo $product->name . "<br>";
    }
    */

    /* getById
    $products = Product::where('price','100.0')->get();
    foreach($products as $product){
        echo $product->name . "<br>";
    }
    */
});

Route::get('/write', function(){
    
    $waists= new Waist;
    $waists->name="M";

    $waists->save();
});


/*
de 1 a 1
Route::get('/category/{id}/product',function(){
    return Category::find($id)->product;
});

de 1 a 1(inversa)
Route::get('/product/{id}/category',function(){
    return Product::find($id)->category;
});
*/

//retornar getProductsByCategory
Route::get('/categories', function(){

    $products = Category::find(1)->products;

    foreach ($products as $product) {
        //
    }

});

/*
Para filtrar una consulta de 1 a muchos
Route::get('/categories', function(){

    $products = Category::find(1)->products->where('name','ejemplo');

    foreach ($products as $product) {
        //
    }

});*/


//muchos a muchos
Route::get('/product/{id}/waist', function($id){

    $product=Product::find($id);
    foreach($product->waists as $waist){
        return $waist;
    }

});





Route::get('/user', 'UserController@showForm');

Route::post('/user', 'UserController@store')->name('user.store');

//Route::post('/login', 'Auth\LoginController@login')->name('login');



Route::get('admin', 'AdminController@dashboard');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register')->name('register');

Route::get('/','HomeController@index');

Route::get('addProduct', 'AdminController@addProductPath')->name('addProduct');

Route::post('addProduct', 'AdminController@addProduct')->name('addProduct');

Route::get('product/{product_id}' , 'ProductController@productSheet')->name('showProduct');

Route::get('/sant', function(){
    return view('product-sheet');
});