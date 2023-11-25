<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonislController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $testimonials = Testimonial::all();
        return view('cms.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $detail = new Testimonial();
        return view('cms.testimonial.create', compact('detail'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'name' => 'required',
            'job' => 'required',
            'image' => 'required'
        ]);
        $icon_path = request()->file('image')->store('public/cms/testimonial');
        $data['image'] = basename($icon_path);
        $succss = Testimonial::create($data);
        if ($succss) {
            return redirect()->route('testimonial.index');
        } else {
            echo "save Faild";
        }
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
        $detail = Testimonial::find($id);
        return view('cms.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $detail = Testimonial::find($id);
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:png,jpg'
        ]);
        if (request()->has('image')) {
            Storage::delete('public/cms/testimonial/' . $detail->image);
            $icon_path = request()->file('image')->store('public/cms/testimonials');
            $data['image'] = basename($icon_path);
        } else {
            $data['image'] = $detail->image;
        }
        $success = $detail->update($data);
        if ($success) {
            return redirect()->route('testimonial.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $detail = Testimonial::find($id);
        Storage::delete('public/cms/testimonial/' . $detail->image);
        $success = $detail->delete();
        if ($success) {
            return redirect()->route('testimonial.index');
        }
    }
}
