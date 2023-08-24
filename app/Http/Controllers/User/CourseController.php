<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Course;
use App\Models\CourseUsers;
use App\Models\Videos;
use App\Models\VideosUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = CourseUsers::join('course', 'course.id', 'course_users.id_course')
            ->join('categories', 'course.id_categories', 'categories.id')
            ->where('course_users.id_users', Auth::user()->id)
            ->where('status', 'pending')
            ->get(['course.*', 'categories.slug as category_slug', 'categories.name_category']);

        return view('user.course', compact('courses'));
    }

    public function finish()
    {
        $courses = CourseUsers::join('course', 'course.id', 'course_users.id_course')
            ->join('categories', 'course.id_categories', 'categories.id')
            ->where('course_users.id_users', Auth::user()->id)
            ->where('status', 'finish')
            ->get(['course.*', 'categories.slug as category_slug', 'categories.name_category']);

        return view('user.course', compact('courses'));
    }

    public function access(string $class)
    {
        $course = Course::where('slug', $class)->first();
        $enroll = CourseUsers::where('id_users', Auth::user()->id)
            ->where('id_course', $course->id)
            ->first();
        $videos = Videos::where('id_course', $course->id)->first();

        if (empty($enroll)) {
            CourseUsers::create([
                'id_users' => Auth::user()->id,
                'id_course' => $course->id,
                'status' => 'pending',
            ]);
            return redirect()->back()->with('message', 'Kelas berhasil ditambahkan ke Kelas Aktif!');
        }
        return redirect()->to('class/' . $course->slug . '/access/' . $videos->slug);
    }

    public function video(string $class, string $video_slug)
    {
        $course = Course::where('course.slug', $class)
            ->join('categories', 'categories.id', 'course.id_categories')
            ->first(['course.*', 'categories.slug as category_slug', 'categories.name_category']);

        $enroll = CourseUsers::where('id_users', Auth::user()->id)
            ->where('id_course', $course->id)
            ->first();

        if (empty($enroll)) {
            return redirect()->to('class');
        }

        $videos  = Videos::where('id_course', $course->id)->orderBy('created_at', 'ASC')->get();

        $video_playing = Videos::where('slug', $video_slug)->first();
        // $video_user    = VideosUsers::join('videos', 'videos.id', 'videos_users.id_videos')
        //     ->join('course', 'course.id', 'videos.id_course')
        //     ->where('course.slug', $class)
        //     ->where('id_users', Auth::user()->id)
        //     ->get();

        // dd($video_user);

        $video_user_check    = VideosUsers::where('id_videos', $video_playing->id)
            ->where('id_users', Auth::user()->id)
            ->first();

        $video_user_total    = VideosUsers::join('videos', 'videos.id', 'videos_users.id_videos')
            ->join('course', 'course.id', 'videos.id_course')
            ->where('course.slug', $class)
            ->where('id_users', Auth::user()->id)
            ->count();

        $video_total  = Videos::where('id_course', $course->id)->orderBy('created_at', 'ASC')->count();
        $comments    = Comments::join('users', 'users.id', 'comments.id_users')
            ->where('id_videos', $video_playing->id)
            ->orderBy('created_at', 'DESC')
            ->get(['comments.*', 'users.name', 'users.image']);

        return view('user.video', compact('comments', 'course', 'video_user_check', 'video_slug', 'class', 'videos', 'video_playing', 'video_user_total', 'video_total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function check(string $slug)
    {
        $video = Videos::where('slug', $slug)->first();
        $video_user = VideosUsers::where('id_users', Auth::user()->id)
            ->where('id_videos', $video->id)->first();

        if (!empty($video_user)) {
            return redirect()->back();
        }

        VideosUsers::create([
            'id_users'  => Auth::user()->id,
            'id_videos' => $video->id,
            'status'    => 'finish'
        ]);

        $idCourse = $video->id_course;
        $jumlah_video_course = Videos::where('id_course', $idCourse)
            ->count();
        $jumlah_video_finish = VideosUsers::join('videos', 'videos.id', 'videos_users.id_videos')
            ->join('course', 'course.id', 'videos.id_course')
            ->where('course.id', $idCourse)
            ->where('id_users', Auth::user()->id)
            ->count();

        if ($jumlah_video_course == $jumlah_video_finish) {
            $courseUsers = CourseUsers::where('id_course', $idCourse)
                ->where('id_users', Auth::user()->id)
                ->first();
            $courseUsers->update([
                'status'     => 'finish',
            ]);
        }

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
