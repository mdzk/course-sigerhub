<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::user()->first_attemp == 1) {
            return redirect('auth/reset');
        }
        $usersCount = User::where('roles', 'user')
            ->where('status', 'active')
            ->count();
        $courseCount = Course::count();

        $users = User::where('roles', 'user')
            ->where('status', 'active')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        $courses = Course::join('categories', 'course.id_categories', 'categories.id')
            ->orderBy('course.created_at', 'desc')
            ->limit(5)
            ->get();

        $data   = [
            'users_count'  => $usersCount,
            'course_count' => $courseCount,
        ];
        return view('admin.dashboard', compact(['data', 'users', 'courses']));
    }
}
