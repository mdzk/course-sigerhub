<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Events::get();

        return view('admin.events', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.events-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_event' => 'required|unique:events,title_event',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',
            'link' => 'required',
            'tipe' => 'required',
            'picture' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $image = $request->file('picture');
        $image->storeAs('public/event', $image->hashName());

        Events::create([
            'title_event'   => $request->title_event,
            'slug' => Str::of($request->title_event)->slug('-'),
            'date'   => $request->date,
            'time'   => $request->time,
            'location'   => $request->location,
            'link'   => $request->link,
            'tipe'   => $request->tipe,
            'picture' => $image->hashName(),
        ]);

        return redirect()->route('event')->with('message', 'Data berhasil disimpan!');
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
        $event = Events::findOrFail($id);

        return view('admin.events-edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $event = Events::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title_event' => ['required', Rule::unique('events')->ignore($event->id, 'id')],
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',
            'link' => 'required',
            'tipe' => 'required',
            'picture' => 'image|mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }


        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $image->storeAs('public/event', $image->hashName());
            Storage::delete('public/event/' . $event->picture);
            $event->update([
                'title_event'   => $request->title_event,
                'slug' => Str::of($request->title_event)->slug('-'),
                'date'   => $request->date,
                'time'   => $request->time,
                'location'   => $request->location,
                'link'   => $request->link,
                'tipe'   => $request->tipe,
                'picture' => $image->hashName(),
            ]);
        } else {
            $event->update([
                'title_event'   => $request->title_event,
                'slug' => Str::of($request->title_event)->slug('-'),
                'date'   => $request->date,
                'time'   => $request->time,
                'location'   => $request->location,
                'link'   => $request->link,
                'tipe'   => $request->tipe,
            ]);
        }
        return redirect()->route('event')->with('message', 'Data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Events::findOrFail($id);
        Storage::delete('public/event/' . $event->picture);
        $event->delete();
        return redirect()->route('event')->with('message', 'Data berhasil dihapus!');
    }
}
