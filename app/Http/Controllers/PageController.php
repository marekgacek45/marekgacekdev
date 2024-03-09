<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Inertia\Inertia;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

       $testimonials = Testimonial::all();

        return Inertia('Home/Index', ['testimonials' => $testimonials]);
    }

    public function about()
    {
        return Inertia('About/Index');
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

$categories=[
    [
    'id'=>'1',
    'name'=>'test'
],
    [
    'id'=>'2',
    'name'=>'test'
],
];
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
