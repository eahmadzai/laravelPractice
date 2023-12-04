<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Choose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $chooses = Choose::all();
        return view('cms.choose.index', compact('chooses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $choose = new Choose();
        return view('cms.choose.create', compact('choose'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $success = Choose::create($data);
        if ($success) {
            return redirect()->route('choose.index');
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
        $choose = Choose::find($id);
        return view('cms.choose.edit', compact('choose'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $choose = Choose::find($id);
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $success = $choose->update($data);
        if ($success) {
            return redirect()->route('choose.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $choose = Choose::find($id);
        Storage::delete('public/cms/choose/' . $choose->delete);
        $success = $choose->delete();
        return redirect()->route('choose.index');
    }
}
