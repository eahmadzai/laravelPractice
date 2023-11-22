<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contact = Contact::first();
        return view('cms.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $contact = new Contact();
        return view('cms.contact.create', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'email' => 'required',
            'phone' => 'required'
        ]);
        $success = Contact::create($data);
        if ($success) {
            return redirect()->route('contact.index');
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
        $contact = Contact::find($id);
        return view('cms.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $contact = Contact::find($id);
        $data = request()->validate([
            'email' => 'required',
            'phone' => 'required'
        ]);
        $success = $contact->update($data);
        if ($success) {
            return redirect()->route('contact.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $contact = Contact::find($id);
        $success = $contact->delete();
        if ($success) {
            return redirect()->route('contact.index');
        }
    }
}
