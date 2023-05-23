<?php

namespace App\Http\Controllers;

use App\Mail\AccountActived;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $users = User::where('status', 'pending')->get();
        return view('home', compact('users'));
    }

    public function verify(Request $request, $id): RedirectResponse
    {
        $data = User::findOrFail($id);
        Mail::to($data['email'])->send(new AccountActived($data));
        $data->update(['status' => 'active']);
        return redirect()->route('home');
    }
}
