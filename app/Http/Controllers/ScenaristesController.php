<?php

namespace App\Http\Controllers;

use App\Models\Scenaristes;
use Illuminate\Http\Request;

class ScenaristesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //initialized from the Model
        $scenaristes = new Scenaristes();
        $scenaristes = $scenaristes->getAll();
        return view('scenaristes', compact('scenaristes'));
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
     * @param  \App\Models\Scenaristes  $scenaristes
     * @return \Illuminate\Http\Response
     */
    public function show(Scenaristes $scenaristes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scenaristes  $scenaristes
     * @return \Illuminate\Http\Response
     */
    public function edit(Scenaristes $scenaristes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scenaristes  $scenaristes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scenaristes $scenaristes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scenaristes  $scenaristes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scenaristes $scenaristes)
    {
        //
    }
}
