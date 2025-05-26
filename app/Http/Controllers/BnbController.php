<?php

namespace App\Http\Controllers;

use App\Models\bnb;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BnbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bnb.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'scheme_id' => 'required',
        ]);
        Bnb::create($request->all());
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(bnb $bnb)
    {
        return view('bnb.show', compact('bnb'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bnb $bnb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bnb $bnb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bnb $bnb)
    {
        //
    }
}
