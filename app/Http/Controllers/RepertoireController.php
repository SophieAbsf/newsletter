<?php

namespace App\Http\Controllers;

use App\Models\Repertoire;
use Illuminate\Http\Request;

class RepertoireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);

        Repertoire::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Repertoire $repertoire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Repertoire $repertoire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Repertoire $repertoire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Repertoire $repertoire)
    {
        //
    }
}
