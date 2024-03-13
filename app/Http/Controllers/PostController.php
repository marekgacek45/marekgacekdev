<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PostController extends Controller
{
    public function Index()
    {

        $posts = Post::all();

        return Inertia('Admin/Posts/Index', ['posts' => $posts]);
    }
    public function create()
    {

$categories = Category::all();

        return Inertia('Admin/Posts/Create',['categories'=>$categories]);
    }

    public function store(Request $request)
    {



        // $image = $request->file('image')->store('projects', 'public');
      

        $post = Post::create([
           
            'content' => $request->content,
        ]);


        // $project->tools()->sync($request->tool_id);
        // $project->categories()->sync($request->category_id);


        return Redirect::route('admin.post.index');
    }

    public function show(Post $post){

        return Inertia("Blog/SinglePost", ['post' => $post]);
    }

    public function edit(Post $post)
    {

        // $project->load('tools');
        // $project->load('categories');


        // return Inertia('Admin/Projects/Edit', ['project' => $project,'tools' => Tool::all(),'categories'=>Category::all()]);
        return Inertia('Admin/Posts/Edit', ['post' => $post]);
    }
}
