<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tool;
use Inertia\Inertia;
use App\Models\Project;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\CategoryProject;

class PageController extends Controller
{
    public function home()
    {

        $testimonials = Testimonial::all();
        $posts = Post::latest()->take(4)->get();


        $services = [
            [
                'label' => "WWW",
                'text' => "Tworzę innowacyjne, responsywne oraz błyskawicznie działające strony internetowe dostosowane do Twoich indywidualnych potrzeb, byś mógł zachwycić swoich odbiorców. Koniec z gotowcami stawianymi od szablonu oraz technologii które pamiętają stare czasy!",
                'image' => "/assets/images/home/services--one.webp",
                'background' => "bg-ownPink-400",
            ],
            [
                'label' => "DESIGN",
                'text' => "Zaprezentuję Ci wyjątkowe projekty, stworzone z myślą o Tobie! Styl moich witryn to efekt indywidualnego podejścia, dostosowanego do specyfiki Twojej branży oraz osobistych preferencji. Wyrwij się spod wpływu szablonów z poprzedniej dekady – każdy mój projekt to nowoczesny design i świeży styl.",
                'image' => "/assets/images/home/services--two.webp",
                'background' => "bg-ownYellow-400",
            ],
            [
                'label' => "SOCIAL MEDIA",
                'text' => "Oferuję kompleksowe zarządzanie mediów społecznościowych! Zajmuję się nie tylko tworzeniem, ale również aktywnym prowadzeniem profili na platformach społecznościowych. Zaufaj mi, abyś mógł skupić się na rozwoju swojego biznesu, a ja zadbanym o Twój wizerunek online!",
                'image' => "/assets/images/home/services--three.webp",        
                'background' => "bg-ownTurquise-400",
            ],
            [
                'label' => "TREŚCI",
                'text' => "Zapewniam kompleksową obsługę treści dla Twojej strony internetowej! Specjalizuję się nie tylko w pisaniu tekstów, ale również w fotografii. Moje usługi obejmują tworzenie treści, które przyciągają uwagę i angażują czytelnika, a także dodawanie unikalnych wizualnych doświadczeń poprzez fotografie.",
                'image' => "/assets/images/home/services--four.webp",
                'background' => "bg-ownOrange-600",
            ],
        ];

        return Inertia('Home/Index', ['testimonials' => $testimonials,'services'=>$services,'posts'=>$posts]);
    }

    public function about()
    {

        $tools = Tool::all();



        return Inertia('About/Index', ['tools' => $tools]);
    }
    public function services()
    {
        return Inertia('Services/Index');
    }
    public function blog()
    {


        $posts = Post::with('categories')->latest()->take(4)->get();




        return Inertia('Blog/Index',['posts'=>$posts]);
    }
    public function contact()
    {
        return Inertia('Contact/Index');
    }
    public function portfolio()
    {

        $categories = Category::all();

        $projects = Project::with('categories', 'tools')->get();


        return Inertia('Portfolio/Index', ['categories' => $categories, 'projects' => $projects]);
    }


    public function admin()
    {
        return Inertia('Admin/Dashboard');
    }
}
