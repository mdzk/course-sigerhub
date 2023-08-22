<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Videos::select('videos.id', 'title_videos', 'iframe', 'title_course')
            ->join('course', 'course.id', '=', 'videos.id_course')
            ->get();

        return view('admin.videos', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $courses = Course::get();
        return view('admin.videos-create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_videos' => 'required',
            'id_course' => 'required',
            'iframe' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        Videos::create([
            'title_videos'   => $request->title_videos,
            'iframe'   => $request->iframe,
            'id_course'   => $request->id_course,
            'slug' => Str::of($request->title_videos)->slug('-'),
        ]);

        return redirect()->route('video')->with('message', 'Data berhasil disimpan!');
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
        $video = Videos::findOrFail($id);
        $courses = Course::get();

        return view('admin.videos-edit', compact('courses', 'video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $video = Videos::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'title_videos' => 'required',
            'id_course' => 'required',
            'iframe' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $video->update([
            'title_videos'   => $request->title_videos,
            'iframe'   => $request->iframe,
            'id_course'   => $request->id_course,
            'slug' => Str::of($request->title_videos)->slug('-'),

        ]);

        return redirect()->route('video')->with('message', 'Data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = Videos::findOrFail($id);
        $video->delete();
        return redirect()->route('video')->with('message', 'Data berhasil dihapus!');
    }
}
