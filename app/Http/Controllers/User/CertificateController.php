<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CourseUsers;
use Barryvdh\DomPDF\Facade\Pdf;
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

    public function export(string $slug)
    {
        $data = CourseUsers::join('course', 'course.id', 'course_users.id_course')
            ->join('categories', 'course.id_categories', 'categories.id')
            ->join('users', 'users.id', 'course_users.id_users')
            ->where('course_users.id_users', Auth::user()->id)
            ->where('course_users.status', 'finish')
            ->where('course.slug', $slug)
            ->first(['users.name', 'course.*', 'categories.slug as category_slug', 'categories.name_category']);
        $pdf = Pdf::loadView('pdf.certificate', ['data' => $data]);
        return $pdf->download('certificate.pdf');
    }
}
