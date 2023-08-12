<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('roles', 'user')
            ->where('status', 'active')
            ->get();

        return view('admin.users', compact('users'));
    }
}
