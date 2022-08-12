<?php

namespace App\Http\Controllers;

use App\Models\lites;
use Illuminate\Http\Request;

class ListesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function zo()
    {
        return view('liste');

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
     * @param  \App\Models\lites  $lites
     * @return \Illuminate\Http\Response
     */
    public function show(lites $lites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lites  $lites
     * @return \Illuminate\Http\Response
     */
    public function edit(lites $lites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lites  $lites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lites $lites)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lites  $lites
     * @return \Illuminate\Http\Response
     */
    public function destroy(lites $lites)
    {
        //
    }
}
