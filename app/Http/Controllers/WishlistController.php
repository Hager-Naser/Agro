<?php

namespace App\Http\Controllers;

use App\Product;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public function index(){
        $products = Product::all();

        $wishlists = Wishlist::all();
        // dd($wishlists->get());
        return view("wishlist" , compact("products" , "wishlists"));
    }
    public function store(Request $request){
        $request->validate([
            'product_id' => ["required"],
            'user_id'  => ["required"],
        ]);
        // dd($request->all());
        DB::table("wishlists")->insert([
            'product_id' => $request->product_id,
            'user_id' => $request->user_id
        ]);
        // dd($wishlists);
        return redirect("/wishlist");
    }
    public function destroy(Request $request)
    {
        $wishlists = Wishlist::find($request->id)->delete();
        return redirect("/wishlist");
    }
}
