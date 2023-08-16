<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::select('course.id', 'title_course', 'name_category', 'description')
            ->join('categories', 'categories.id', '=', 'course.id_categories')
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
        $course = Course::findOrFail($id);
        $categories = Categories::get();

        return view('admin.course-edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title_course' => ['required', Rule::unique('course')->ignore($course->id, 'id')],
            'id_categories' => 'required',
            'description' => 'required',
            'thumbnail' => 'image|mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }


        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $image->storeAs('public/thumbnail', $image->hashName());
            Storage::delete('public/thumbnail/' . $course->thumbnail);
            $course->update([
                'title_course'     => $request->title_course,
                'id_categories'   => $request->id_categories,
                'description'   => $request->description,
                'thumbnail'     => $image->hashName(),
            ]);
        } else {
            $course->update([
                'title_course'     => $request->title_course,
                'id_categories'   => $request->id_categories,
                'description'   => $request->description,
            ]);
        }
        return redirect()->route('course')->with('message', 'Data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        Storage::delete('public/thumbnail/' . $course->thumbnail);
        $course->delete();
        return redirect()->route('course')->with('message', 'Data berhasil dihapus!');
    }
}
