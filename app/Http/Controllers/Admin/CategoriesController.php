<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Categories::get();
        return view('admin.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.categories-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_category' => 'required|unique:categories,name_category',
        ]);

        if ($validator->fails()) {
            return redirect('admin/categories/create')
                ->withErrors($validator)
                ->withInput();
        }

        Categories::create([
            'name_category'   => $request->name_category
        ]);

        return redirect()->route('categories')->with('message', 'Data berhasil disimpan!');
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
        $category = Categories::findOrFail($id);

        return view('admin.categories-edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Categories::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name_category' => ['required', Rule::unique('categories')->ignore($data->id, 'id')],
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data->update([
            'name_category' => $request->name_category,
        ]);
        return redirect()->route('categories')->with('message', 'Data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = Categories::findOrFail($id);
        $category->delete();
        return redirect()->route('categories')->with('message', 'Data berhasil dihapus!');
    }
}
