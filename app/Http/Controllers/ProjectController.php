<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CategoryProject;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    public function Index()
    {

        $projects = Project::all();

        return Inertia('Admin/Projects/Index', ['projects' => $projects]);
    }

    public function create()
    {

$tools = Tool::all();
$categories = Category::all();

        return Inertia('Admin/Projects/Create',['tools'=>$tools,'categories'=>$categories]);
    }

    public function store(Request $request)
    {



        $image = $request->file('image')->store('projects', 'public');
        // $path = '/storage/' . $logo;

        $project = Project::create([
            'title' => $request->title,
            'site_link' => $request->site_link,
            'youtube_link' => $request->youtube_link,
            'image' => $image,
            'description' => $request->description,
        ]);


        $project->tools()->sync($request->tool_id);
        $project->categories()->sync($request->category_id);


        return Redirect::route('admin.project.index');
    }
    public function edit(Project $project)
    {

        $project->load('tools');
        $project->load('categories');


        return Inertia('Admin/Projects/Edit', ['project' => $project,'tools' => Tool::all(),'categories'=>Category::all()]);
    }

    public function update(Request $request, Project $project)
    {

        $image = $project->image;
        if ($request->file('image')) {
            Storage::delete('public/' . $project->image);
            $image = $request->file('image')->store('projects', 'public');
        }
      

        $project->update([
            'title' => $request->title,
            'site_link' => $request->site_link,
            'youtube_link' => $request->youtube_link,
            'image' => $image,
            'description' => $request->description,
        ]);

        $project->tools()->sync($request->tool_id);
        $project->categories()->sync($request->category_id);


        return Redirect::route('admin.project.index');
    }
    public function destroy(Project $project)
    {
        $project->delete();
    }
}
