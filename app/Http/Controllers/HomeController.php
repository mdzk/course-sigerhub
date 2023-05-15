<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = Users::where('status', 'pending')->get();
        return view('home', compact('users'));
    }

    public function verify(Request $request, $id): RedirectResponse
    {
        Users::findOrFail($id)->update(['status' => 'active']);
        return redirect()->route('home');
    }
}
