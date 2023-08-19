<?php

namespace App\Http\Controllers;

use App\Mail\AccountActived;
use App\Models\Categories;
use App\Models\Course;
use App\Models\Events;
use App\Models\User;
use App\Models\Videos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $events = Events::orderBy('date', 'desc')
            ->limit(5)
            ->get();

        return view('home.homepage', compact('events'));
    }
    public function categoryShow(string $slug)
    {
        $courses = Course::join('categories', 'course.id_categories', 'categories.id')
            ->where('categories.slug', $slug)
            ->get(['course.*', 'categories.slug as category_slug', 'categories.name_category']);
        $categories = Categories::all();
        return view('home.class', compact('courses', 'categories'));
    }

    public function class()
    {
        $courses = Course::join('categories', 'course.id_categories', 'categories.id')
            ->get(['course.*', 'categories.slug as category_slug', 'categories.name_category']);
        $categories = Categories::all();
        return view('home.class', compact('courses', 'categories'));
    }

    public function classShow(string $slug)
    {
        $class = Course::where('course.slug', $slug)->first();
        $videos = Videos::where('id_course', $class->id)->get();
        return view('home.class-detail', compact('class', 'videos'));
    }
    public function event()
    {
        return view('home.event');
    }

    public function eventShow(string $slug)
    {
        $event = Events::where('slug', $slug)->first();
        return view('home.event-detail', compact('event'));
    }

    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }

    public function home()
    {
        if (Auth::user()->roles == 'admin') {
            return redirect()->route('admin');
        }
        if (Auth::user()->roles == 'user') {
            return redirect()->route('dashboard');
        }
    }
}
