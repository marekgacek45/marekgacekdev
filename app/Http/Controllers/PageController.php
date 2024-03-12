<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Inertia\Inertia;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\CategoryProject;

class PageController extends Controller
{
    public function home()
    {

       $testimonials = Testimonial::all();

        return Inertia('Home/Index', ['testimonials' => $testimonials]);
    }

    public function about()
    {

$tools = Tool::all();



        return Inertia('About/Index',['tools'=>$tools]);
    }
    public function services()
    {
        return Inertia('Services/Index');
    }
    public function blog()
    {
        return Inertia('Blog/Index');
    }
    public function contact()
    {
        return Inertia('Contact/Index');
    }
    public function portfolio()
    {

$categories= Category::all();
  
$projects = [
    [
        'id'=>'1',
        'title'=>'test',
        'site_link'=>'test.pl',
        'image'=>'',
        'youtube_link'=>'',
        'description'=>'lorem ipsum'
    ],
];


        return Inertia('Portfolio/Index',['categories'=>$categories,'projects'=>$projects]);
    }


    public function admin()
    {
        return Inertia('Admin/Dashboard');
    }

}
