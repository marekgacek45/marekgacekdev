<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ToolController extends Controller
{
    public function index()
    {

        $tools = Tool::all();

        return Inertia('Admin/Tools/Index', ['tools' => $tools]);
    }

    public function create()
    {
        return Inertia('Admin/Tools/Create');
    }

    public function store(Request $request)
    {



        $logo = $request->file('logo')->store('tools', 'public');
        // $path = '/storage/' . $logo;

        Tool::create([
            'name' => $request->name,
            'logo' => $logo,

        ]);


        return Redirect::route('admin.tool.index');
    }

    public function edit(Tool $tool)
    {



        return Inertia('Admin/Tools/Edit', ['tool' => $tool]);
    }

    public function update(Request $request, Tool $tool)
    {
// dd($request->all());

        $logo = $tool->logo;
        if ($request->file('logo')) {
            Storage::delete('public/' . $tool->logo);
            $logo = $request->file('logo')->store('tools', 'public');
        }


        $tool->update([
            'name' => $request->name,
            'logo' => $logo,

        ]);


        return Redirect::route('admin.tool.index');
    }
    public function destroy(Tool $tool)
    {
        $tool->delete();
    }
}
