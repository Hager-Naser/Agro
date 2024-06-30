<?php

namespace App\Http\Controllers;
use App\Category;

use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('subcategory.subcategory' , compact("subcategories" ,"categories" ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->category_id != null){

            $request->validate([
                "name" =>"required|max:99|unique:subcategories,name",
                "category_id" => "nullable",
                "image" => "nullable|max:1000|mimes:jpg,png,jpeg",
            ]);
            $newImageName =$request->file('image')->hashName();
            $request->file("image")->move(public_path("\assetUser\images\\fashion\banner")  , $newImageName);
            $data = $request->except("image" , "_token");
            $data['image'] = $newImageName;
            return $this->direct(DB::table('subcategories')->insert($data));
        }else{
            $request->validate([
                "name" =>"required|max:99|unique:subcategories,name",
                "category_id" => "nullable",
            ]);
            $categories = Category::create([
                "name" => $request->name,
                "details" => $request->details,
            ]);
            $subcategories = Subcategory::all();
            return redirect("/subcategories");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $subcategory)
    {
        $id = $request->id;
        $request->validate([
            'name' =>  "required|max:99|unique:subcategories,name,".$id,
        ]);
        $subcategories =Subcategory::find($id);
        $data = $request->except('image', '_token', '_method');
        if ($request->hasFile('image')) {
            $newImageName = $request->file("image")->hashName();
            $request->file("image")->move(public_path("\assetUser\images\\fashion\banner") , $newImageName);
            $data['image'] = $newImageName;
            $path = unlink(public_path("\assetUser\images\\fashion\banner\\{$subcategories->image}"));
        };
        return $this->direct(DB::table('subcategories')->update($data));
        // if($request->hasFile("image")){
        //     $newImageName = $request->file("image")->hashName();
        //     $request->file("image")->move(public_path("\assetUser\images\\fashion\banner") , $newImageName);
        //     // unlink(public_path("\assetUser\images\\fashion\banner\\") . $subcategories->image);
        //     $data["image"] = $newImageName;
        //     // dd($data);
        // }
        // // dd($subcategories);
        // $subcategories->update($data);
        // session()->flash('edit',"Subcategory Edited Successfully");
        // return redirect("/subcategories");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Subcategory::find($request->id)->delete();
        session()->flash("delete" , "Subcategory deleted successfully");
        return redirect("/subcategories");
    }
}
