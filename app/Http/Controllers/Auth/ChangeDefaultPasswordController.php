<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangeDefaultPasswordController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->first_attemp == 0) {
            return redirect('dashboard');
        }
        return view('auth.passwords.default');
    }

    public function update(Request $request): RedirectResponse
    {
        $id = Auth::user()->id;
        $this->validate($request, [
            'password'     => 'required|min:5',
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'first_attemp' => 0,
            'password'     => Hash::make($request->password),
        ]);
        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
