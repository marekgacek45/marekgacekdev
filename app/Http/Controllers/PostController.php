<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

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

        return Inertia('Admin/Posts/Create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {



        $thumbnail = $request->file('thumbnail')->store('post', 'public');

        $slug = \Illuminate\Support\Str::slug($request->title, '_');

        $post = Post::create([

            'title' => $request->title,
            'slug' => $slug,
            'thumbnail' => $thumbnail,
            'content' => $request->content,
        ]);



        $post->categories()->sync($request->category_id);


        return Redirect::route('admin.post.index');
    }

    public function show(Post $post)
    {

        $post->load('categories');


        return Inertia("Blog/SinglePost", ['post' => $post]);
    }

    public function edit(Post $post)
    {


        $post->load('categories');

       

        return Inertia('Admin/Posts/Edit', ['post' => $post, 'categories' => Category::all()]);
    }

    public function update(Request $request, Post $post)
    {

      


        $thumbnail = $post->thumbnail;
        if ($request->file('thumbnail')) {
            Storage::delete('public/' . $post->thumbnail);
            $thumbnail = $request->file('thumbnail')->store('post', 'public');
        }

        $slug = \Illuminate\Support\Str::slug($request->title, '_');

        $post->update([
            'title' => $request->title,
            'slug' => $slug,
            'thumbnail' => $thumbnail,
            'content' => $request->content,
        ]);


        $post->categories()->sync($request->category_id);


        return Redirect::route('admin.post.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
    }
}
