<?php

namespace App\Http\Controllers;

use App\Models\levels;
use Illuminate\Http\Request;

class LevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = levels::orderBy('level','asc')->get();

        return view('level',compact('levels'));   
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
        $level = levels::create([
            'level' => $request->level,
            
           
        ]);

        $levels = levels::orderBy('level','asc')->get();

        return view('level',compact('levels'));
    }

    // public function lev(){
        
    //     $levels = levels::orderBy('level','asc')->get();
    //     return view('level',compact('levels'));
    // }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\levels  $levels
     * @return \Illuminate\Http\Response
     */
    public function show(levels $levels)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\levels  $levels
     * @return \Illuminate\Http\Response
     */
    public function edit(levels $levels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\levels  $levels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, levels $levels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\levels  $levels
     * @return \Illuminate\Http\Response
     */
    public function destroy(levels $levels)
    {
        //
    }
}
