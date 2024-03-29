<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\AccountActived;
use App\Mail\AccountRejected;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class UsersVerificationController extends Controller
{
    //
    public function index()
    {
        $users = User::where('roles', 'user')
            ->where('status', 'pending')
            ->get();

        return view('admin.users-verification', compact('users'));
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
        return redirect()->route('users-verification');
    }

    public function reject(Request $request, $id): RedirectResponse
    {
        $data = User::findOrFail($id);
        $data->update([
            'status' => 'reject',
        ]);

        Mail::to($data['email'])->send(new AccountRejected($data));
        // Http::asForm()->post('http://localhost:9000/send-message', [
        //     'number' => $data['nohp'],
        //     'message' => 'Pendaftaran akun anda ditolak',
        // ]);
        return redirect()->route('users-verification');
    }
}
