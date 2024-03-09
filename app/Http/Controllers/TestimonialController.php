<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class TestimonialController extends Controller
{
    public function Index()
    {

        $testimonials = Testimonial::all();

        return Inertia('Admin/Testimonials/Index', ['testimonials' => $testimonials]);
    }

    public function create()
    {
        return Inertia('Admin/Testimonials/Create');
    }

    public function store(Request $request)
    {

      

        $logo = $request->file('logo')->store('testimonials', 'public');
        // $path = '/storage/' . $logo;

        Testimonial::create([
            'link' => $request->link,
            'logo' => $logo,
            'content' => $request->content,
        ]);


        return Redirect::route('admin.testimonial.index');
    }


    public function edit(Testimonial $testimonial)
    {



        return Inertia('Admin/Testimonials/Edit', ['testimonial' => $testimonial]);
    }

    public function update(Request $request, Testimonial $testimonial)
    {


        $logo = $testimonial->logo;
        if ($request->file('logo')) {
            Storage::delete('public/' . $testimonial->logo);
            $logo = $request->file('logo')->store('testimonials', 'public');
        }
      

        $testimonial->update([
            'link' => $request->link,
            'logo' => $logo,
            'content' => $request->content,
        ]);


        return Redirect::route('admin.testimonial.index');
    }
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
    }
}
