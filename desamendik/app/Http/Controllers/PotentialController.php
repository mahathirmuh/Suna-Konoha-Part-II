<?php

namespace App\Http\Controllers;

use App\Potential;
use Illuminate\Http\Request;

class PotentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $potential = Potential::all();
        return view('admin.potensi.index', compact('potential'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Potential  $potential
     * @return \Illuminate\Http\Response
     */
    public function show(Potential $potential)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Potential  $potential
     * @return \Illuminate\Http\Response
     */
    public function edit(Potential $potential)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Potential  $potential
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Potential $potential)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Potential  $potential
     * @return \Illuminate\Http\Response
     */
    public function destroy(Potential $potential)
    {
        //
    }
}
