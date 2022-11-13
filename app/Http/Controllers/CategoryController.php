<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
        return redirect('/category')->with('message', 'Category Created Successfully');
    }
    
}

// route -> controller -> view