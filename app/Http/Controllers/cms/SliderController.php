<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sliders = Slider::all();
        return view('cms.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $slider = new Slider();
        return view('cms.slider.create', compact('slider'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:png,jpg'
        ]);
        $icon_path = request()->file('image')->store('public/cms/slider');
        $data['image'] = basename($icon_path);
        $succss = Slider::create($data);
        if ($succss) {
            return redirect()->route('slider.index');
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
        $slider = Slider::find($id);
        return view('cms.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $detail = Slider::find($id);
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:png,jpg'
        ]);
        if (request()->has('image')) {
            Storage::delete('public/cms/slider/' . $detail->image);
            $icon_path = request()->file('image')->store('public/cms/slider');
            $data['image'] = basename($icon_path);
        } else {
            $data['image'] = $detail->image;
        }
        $success = $detail->update($data);
        if ($success) {
            return redirect()->route('slider.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $detail = Slider::find($id);
        Storage::delete('public/cms/slider/' . $detail->image);
        $success = $detail->delete();
        if ($success) {
            return redirect()->route('slider.index');
        }
    }
}
