<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CategoryProject;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();

        return Inertia('Admin/Categories/Index', ['categories' => $categories]);
    }

    public function create()
    {
        return Inertia('Admin/Categories/Create');
    }

    public function store(Request $request)
    {



        

        Category::create([
            'name' => $request->name,
            

        ]);


        return Redirect::route('admin.category.index');
    }

    

    public function edit(Category $category)
    {



        return Inertia('Admin/Categories/Edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {


      


        $category->update([
            'name' => $request->name,


        ]);


        return Redirect::route('admin.category.index');
    }
    public function destroy(Category $category)
    {
        $category->delete();
    }
}
