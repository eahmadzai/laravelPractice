<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Provide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\returnSelf;

class ProvideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $provide = Provide::first();
        return view('cms.providing.index', compact('provide'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $provide = new Provide();
        return view('cms.providing.create', compact('provide'));
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
        $success = Provide::create($data);
        if ($success) {
            return redirect()->route('providing.index');
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
        $provide = Provide::finnd($id);
        return view('cms.contact.edit', compact('provide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $detail = Provide::find($id);
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        //
        $detail = Provide::find($id);
        $success = $detail->delete();
        if ($success) {
            return redirect()->route('providing.index');
        }
    }
}
