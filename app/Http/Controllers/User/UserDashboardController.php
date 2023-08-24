<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseUsers;
use App\Models\User;
use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
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
            ->limit(5)
            ->get();

        $courses = Course::join('categories', 'course.id_categories', 'categories.id')
            ->limit(5)
            ->get();

        $course_finish = CourseUsers::join('course', 'course.id', 'course_users.id_course')
            ->where('course_users.id_users', Auth::user()->id)
            ->where('status', 'finish')
            ->count();

        $course_pending = CourseUsers::join('course', 'course.id', 'course_users.id_course')
            ->where('course_users.id_users', Auth::user()->id)
            ->where('status', 'pending')
            ->count();

        $class = CourseUsers::join('course', 'course.id', 'course_users.id_course')
            ->where('course_users.id_users', Auth::user()->id)
            ->orderBy('course_users.created_at', 'DESC')
            ->first();

        $course_recent = Videos::where('id_course', $class == NULL ? NULL : $class->id)
            ->join('course', 'course.id', 'videos.id_course')
            ->get();

        $data   = [
            'users_count'  => $usersCount,
            'course_count' => $courseCount,
            'course_finish' => $course_finish,
            'course_pending' => $course_pending,
        ];
        return view('user.dashboard', compact(['data', 'users', 'courses', 'course_recent']));
    }
}
