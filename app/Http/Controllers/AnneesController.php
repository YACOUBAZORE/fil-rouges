<?php

namespace App\Http\Controllers;

use App\Models\annees;
use Illuminate\Http\Request;

class AnneesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function annee(){
        return view("annee");
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
        $annee = annees::create([
            'annee_academique' => $request->annee_academique,
            
           
        ]);

        return view('annee');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\annees  $annees
     * @return \Illuminate\Http\Response
     */
    public function show(annees $annees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\annees  $annees
     * @return \Illuminate\Http\Response
     */
    public function edit(annees $annees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\annees  $annees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, annees $annees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\annees  $annees
     * @return \Illuminate\Http\Response
     */
    public function destroy(annees $annees)
    {
        //
    }
}
