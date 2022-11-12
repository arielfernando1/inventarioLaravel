<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    //index
    public function index()
    {
        $categories = Category::all();
        return view('categories.index',['categories'=>$categories]);
    }
    //store
    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:8',
            'description'=>'required|min:8'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->route('categories.index')->with('success','Categoria creada correctamente');
    }
    //show
    public function show($id){
        $category = Category::find($id);
        return view('categories.show',['category'=>$category]);
    }
    //update
    public function update($id){
        $category = Category::find($id);
        $category->name = request('name');
        $category->description = request('description');
        $category->save();
        return redirect()->route('categories.index');
    }
    //destroy
    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index');
    }
}
