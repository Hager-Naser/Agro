<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();
        $carts = DB::table("carts")->select("*")->get();
        return view("cart" , compact("products" , "carts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(var_dump((int) $request->quantity));
        $request->validate([
            'product_id' => ["required"],
            'user_id'  => ["required"],
            'quantity'  => ["nullable"],
            'price'  => ["required"],
        ]);
        $data = $request->except("_token" , "price");
        $data["total"] = (int) $request->quantity *  (int) $request->price;
        // dd($data["total"]);
        // dd($data);
        DB::table('carts')->insert($data);
        return redirect("/shop");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'quantity' => ["required" , "min:1" , "max:10"],
            'user_id'  => ["required"],
            'product_id'  => ["required"],
            'price'  => ["required"],
        ]);
        $carts = Cart::find($request->id);
        $total = (int) $request->quantity *  (int) $request->price;
        $carts->update([
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
            'total' => $total,
            'quantity' => $request->quantity,
        ]);
        // dd($carts->all());
        return redirect("/cart");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // dd($request);
        $carts = Cart::find($request->id)->delete();
        return redirect("/cart");
    }

    public function destroyAllCarts(Request $request)
    {
        $cartsUser = DB::table("carts")->select("*")->where("user_id" , $request->user_id);
        $cartsUser->delete();
        return redirect("/cart");
    }
}

