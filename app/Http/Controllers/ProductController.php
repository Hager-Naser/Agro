<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('products.products', compact("categories", "products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.add_product', compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:99|unique:products,name",
            "price" => "nullable",
            "image" => "required",
        ]);
        Product::create([
            "category_id" => $request->category_id,
            "name" => $request->name,
            "image" => $request->image,
            "details" => $request->details,
            "price" => $request->price,
            "discount" => $request->discount,
        ]);
        // dd($request->image);
        // $data = $request->except("category_id" , "_token" , "image");
        // $newImage = $request->file("image")->hashName();
        // $request->file("image")->move(public_path("\assetUser\images\\fashion\banner")  , $newImage);
        // $data['image'] = $newImage;
        // DB::table("products")->insert($data);
        session()->flash("add", "Product Added Successfully");
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request )
    {
        $product = DB::table("products")->select("*")->where("id" , $request->product_id)->first();
        // dd($product);
        $productsSame = Product::all();
        return view("product_details" , compact("product" , "productsSame"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view("products.edit_product" , compact("product" , "categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $id = $request->id;

        $request->validate([
            'name' =>  "required|max:99|unique:products,name," . $id,
        ]);
        $products = Product::find($id);
        $products->update([
            "category_id" => $request->category_id,
            "name" => $request->name,
            "image" => $request->image,
            "details" => $request->details,
            "price" => $request->price,
            "discount" => $request->discount,
        ]);
        session()->flash('edit', "Product Edited Successfully");
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Product::find($request->id)->delete();
        session()->flash("delete", "Product deleted successfully");
        return redirect("/products");
    }
    // public function getSub($id)
    // {
    //     $subcategories = DB::table("subcategories")->where("category_id", $id)->pluck("name", "id");
    //     return json_encode($subcategories);
    // }
}
