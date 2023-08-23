<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CourseUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CertificateController extends Controller
{
    //
    public function index()
    {
        $courses = CourseUsers::join('course', 'course.id', 'course_users.id_course')
            ->join('categories', 'course.id_categories', 'categories.id')
            ->where('course_users.id_users', Auth::user()->id)
            ->where('status', 'finish')
            ->get(['course.*', 'categories.slug as category_slug', 'categories.name_category']);

        return view('user.certificate', compact('courses'));
    }
}
