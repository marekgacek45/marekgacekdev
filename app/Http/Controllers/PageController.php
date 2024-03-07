<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $comments = [
            [
                'id' => 1,
                'logo' => '',
                'link' => 'https://marekgacekdev.pl',
                'body' => 'adsds',
            ],
            [
                'id' => 2,
                'logo' => '',
                'link' => 'https://marekgacekdev.pl',
                'body' => 'sdasdsadasdasdasdasdasddsadasdasd',
            ],
        ];

        return Inertia('Home/Index', ['comments' => $comments]);
    }

    public function about()
    {
        return Inertia('About/Index');
    }
    public function services()
    {
        return Inertia('Services/Index');
    }
}
