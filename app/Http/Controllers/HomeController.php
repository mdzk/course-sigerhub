<?php

namespace App\Http\Controllers;

use App\Mail\AccountActived;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
        $password = Str::random(8);
        $data->update([
            'status' => 'active',
            'password' => Hash::make($password),
        ]);

        Mail::to($data['email'])->send(new AccountActived($data, $password));
        Http::asForm()->post('http://localhost:9000/send-message', [
            'number' => $data['nohp'],
            'message' => $password,
        ]);
        return redirect()->route('home');
    }
}
