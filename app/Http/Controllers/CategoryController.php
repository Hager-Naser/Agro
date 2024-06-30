<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.categories' , compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("categories.add_category");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            "name" =>"required|max:99|unique:categories,name",
        ]);
        $categories = Category::create([
            "name" => $request->name,
            "image" => $request->image,
            "details" => $request->details,
        ]);
        session()->flash("add" , "Category Added Successfully");
        return redirect()->route("categories.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit_category' , compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $category)
    {
        $id = $request->id;
        $request->validate([
            'name' =>  "required|max:99|unique:categories,name,".$id,
        ]);
        $categories =Category::find($id);
        if($request->image == null){
            $categories->update([
                'name' =>  $request->name,
                'details' =>  $request->details,
                "image" => $categories->image,
            ]);
        } else{

            $categories->update([
                'name' =>  $request->name,
                'details' =>  $request->details,
                "image" => $request->image,
            ]);
        }
        session()->flash('edit',"Category Edited Successfully");
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Category::find($request->id)->delete();
        session()->flash("delete" , "Category deleted successfully");
        return redirect("/categories");
    }
}
