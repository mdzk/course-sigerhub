<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Users;
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
        $users = Users::where('status', 'pending')->get();
        return view('home', compact('users'));
    }

    public function verify(Request $request, $id): RedirectResponse
    {
        $data = Users::findOrFail($id);
        $data->update(['status' => 'active']);
        Mail::to($data['email'])->send(new OrderShipped());
        return redirect()->route('home');
    }
}
