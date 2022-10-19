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

    }



    public static function show(Category $category){
        return view('admin.categories.show', compact('category'));
    }

    public static function edit(Category $category){
        return view('admin.categories.edit', compact('category'));
    }

    public static function update(Request $request,Category  $category){
        
    }

    public static function destroy(Category $category){

    }

    

}
