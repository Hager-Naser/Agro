<?php

use App\Cart;
use App\Category;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use App\Product;
use App\Subcategory;
use App\Wishlist;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
Route::get("/" , function(){
    return view('auth.login');
});
Route::get("/home" , function () {
    foreach (Auth::user()->roles_name as $role){
        if($role == "user"){
            $categories = Category::all();
            $products = Product::all();

            return view("ecommerce" , compact("categories"  , "products"));
        }else{
            return view("home");
        }
    }
})->name("home");
Auth::routes();
Route::resource("shop" , 'ShopController');
// Route::resource("cart" , 'CartController');
Route::post("/product/details" , [ProductController::class , "show"])->name("show");
Route::get("/profile" , [UserController::class , "show"])->name("profile");
Route::get("/cart" , [CartController::class , "index"])->name("cart");
Route::post("/cart/store" , [CartController::class , "store"])->name("cartStore");
Route::post("/cart/update" , [CartController::class , "update"])->name("cartUp");
Route::post("/cart/destroy" , [CartController::class , "destroy"])->name("cartDe");
Route::post("/cart/destroy/all" , [CartController::class , "destroyAllCarts"])->name("cartDeAll");
Route::get("/wishlist" , [WishlistController::class , "index"])->name("wishlist");
Route::post("/wishlist/store" , [WishlistController::class , "store"])->name("wishlistStore");
Route::post("/wishlist/destroy" , [WishlistController::class , "destroy"])->name("wishlistDe");

Route::resource("categories",'CategoryController');

// Route::resource("subcategories",'SubcategoryController');
Route::resource("products",'ProductController');

Route::get("category/{id}","ProductController@getSub");

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    });
Route::delete("/delete" , [UserController::class , "destroy"])->name('logoutUser');
Route::get('/{page}', 'AdminController@index');
