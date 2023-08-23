<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        return view('user.setting', compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = User::findOrFail(Auth::user()->id);
        return view('user.setting-edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($user->id, 'id')],
            'nohp' => 'required',
            'thumbnail' => 'image|mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/profile', $image->hashName());
            if ($user->image !== 'default.png') {
                Storage::delete('public/profile/' . $user->image);
            }
            $user->update([
                'image'     => $image->hashName(),
                'name'     => $request->name,
                'email'   => $request->email,
                'nohp'   => $request->nohp,
                'nama_usaha'   => $request->nama_usaha,
                'bidang_usaha'   => $request->bidang_usaha,
                'description'   => $request->description,
                'password'   => $request->password == NULL ? $user->password : Hash::make($request->password),
            ]);
        } else {
            $user->update([
                'name'     => $request->name,
                'email'   => $request->email,
                'nohp'   => $request->nohp,
                'nama_usaha'   => $request->nama_usaha,
                'bidang_usaha'   => $request->bidang_usaha,
                'description'   => $request->description,
                'password'   => $request->password == NULL ? $user->password : Hash::make($request->password),
            ]);
        }
        return redirect()->route('dashboard-setting')->with('message', 'Data berhasil disimpan!');
    }
}
