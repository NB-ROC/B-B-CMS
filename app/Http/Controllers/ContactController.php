<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        $index = 0;
        session(['contactIndex' => $index]);
        if (count($contacts) >= 1) {
            $contact = $contacts[session('contactIndex')];
        }
        else{
            $contact = null;
        }
        return view('contact.index', compact('contacts'), compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        Contact::create($request->all());

        return redirect()->route('contact.create');
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
    public function increment()
    {
        session(['contactIndex' => session('contactIndex') + 1]);
        return view('contact.index');
    }
    public function decrement()
    {
        session(['contactIndex' => session('contactIndex') - 1]);
        return view('contact.index');
    }
}
