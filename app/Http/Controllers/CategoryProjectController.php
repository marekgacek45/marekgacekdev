<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProject;
use Illuminate\Support\Facades\Redirect;

class CategoryProjectController extends Controller
{
    public function index()
    {

        $categoriesProjects = CategoryProject::all();

        return Inertia('Admin/CategoriesProjects/Index', ['categoriesProjects' => $categoriesProjects]);
    }

    public function create()
    {
        return Inertia('Admin/CategoriesProjects/Create');
    }

    public function store(Request $request)
    {



        

        CategoryProject::create([
            'name' => $request->name,
            

        ]);


        return Redirect::route('admin.category_project.index');
    }

    

    public function edit(CategoryProject $categoryProject)
    {



        return Inertia('Admin/CategoriesProjects/Edit', ['categoryProject' => $categoryProject]);
    }

    public function update(Request $request, CategoryProject $categoryProject)
    {


      


        $categoryProject->update([
            'name' => $request->name,


        ]);


        return Redirect::route('admin.category_project.index');
    }
    public function destroy(CategoryProject $categoryProject)
    {
        $categoryProject->delete();
    }
}
