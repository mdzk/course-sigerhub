<?php

namespace App\Http\Controllers;

use App\Mail\AccountActived;
use App\Models\Events;
use App\Models\User;
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
    public function class()
    {
        return view('home.class');
    }
    public function event()
    {
        return view('home.event');
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
