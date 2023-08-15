<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::join('categories', 'categories.id', '=', 'course.id_categories')
            ->get();
        return view('admin.course', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Categories::get();
        return view('admin.course-create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_course' => 'required|unique:course,title_course',
            'id_categories' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $image = $request->file('thumbnail');
        $image->storeAs('public/thumbnail', $image->hashName());

        Course::create([
            'title_course'   => $request->title_course,
            'id_categories'   => $request->id_categories,
            'description'   => $request->description,
            'thumbnail' => $image->hashName(),
        ]);

        return redirect()->route('course')->with('message', 'Data berhasil disimpan!');
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
