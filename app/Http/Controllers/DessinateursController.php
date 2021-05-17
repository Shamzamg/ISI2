<?php

namespace App\Http\Controllers;

use App\Models\Dessinateurs;
use Illuminate\Http\Request;

class DessinateursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //initialized from the Model
        $dessinateurs = new Dessinateurs();
        $dessinateurs = $dessinateurs->getAll();
        return view('dessinateurs', compact('dessinateurs'));
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
     * @param  \App\Models\Dessinateurs  $dessinateurs
     * @return \Illuminate\Http\Response
     */
    public function show(Dessinateurs $dessinateurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dessinateurs  $dessinateurs
     * @return \Illuminate\Http\Response
     */
    public function edit(Dessinateurs $dessinateurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dessinateurs  $dessinateurs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dessinateurs $dessinateurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dessinateurs  $dessinateurs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dessinateurs $dessinateurs)
    {
        //
    }
}
