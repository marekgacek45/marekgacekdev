<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
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
        return Inertia('Admin/Projects/Create');
    }

    public function store(Request $request)
    {



        $image = $request->file('image')->store('projects', 'public');
        // $path = '/storage/' . $logo;

        Project::create([
            'title' => $request->title,
            'site_link' => $request->site_link,
            'youtube_link' => $request->youtube_link,
            'image' => $image,
            'description' => $request->description,
        ]);


        return Redirect::route('admin.project.index');
    }
    public function edit(Project $project)
    {



        return Inertia('Admin/Projects/Edit', ['project' => $project]);
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


        return Redirect::route('admin.project.index');
    }
    public function destroy(Project $project)
    {
        $project->delete();
    }
}
