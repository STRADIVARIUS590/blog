<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //

    public static function index(){
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public static function create(){
        return view('admin.categories.create');
    }

    public static function store(Request $request){
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);

        $category = Category::create($request->all());
        return redirect()->route('admin.categories.edit', $category)->with('info' ,'La categoria se ha guardado con exito');;
    }



    public static function show(Category $category){
        return view('admin.categories.show', compact('category'));
    }

    public static function edit(Category $category){
        return view('admin.categories.edit', compact('category'));
    }

    public static function update(Request $request,Category  $category){
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:categories,slug,$category->id"
        ]);

        $category->update($request->all());
        return redirect()->route('admin.categories.edit', compact('category'))->with('info' ,'La categoria se ha actualizado con exito');
    }

    public static function destroy(Category $category){
        $category->delete();
        return redirect()->route('admin.categories.index')->with('info' ,'La categoria se ha eliminado con exito');;
    }

    

}
