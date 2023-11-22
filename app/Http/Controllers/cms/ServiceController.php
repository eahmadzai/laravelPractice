<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = service::all();
        return view('cms.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $service = new service();
        return view('cms.services.create', compact('service'));
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
        $icon_path = request()->file('image')->store('public/cms/service');
        $data['image'] = basename($icon_path);
        $succss = service::create($data);
        if ($succss) {
            return redirect()->route('service.index');
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
        $service = service::find($id);
        return view('cms.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $detail = service::find($id);
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:png,jpg'
        ]);
        if (request()->has('image')) {
            Storage::delete('public/cms/service/' . $detail->image);
            $icon_path = request()->file('image')->store('public/cms/service');
            $data['image'] = basename($icon_path);
        } else {
            $data['image'] = $detail->image;
        }
        $success = $detail->update($data);
        if ($success) {
            return redirect()->route('service.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $detail = service::find($id);
        Storage::delete('public/cms/service/' . $detail->image);
        $success = $detail->delete();
        if ($success) {
            return redirect()->route('service.index');
        }
    }
}
