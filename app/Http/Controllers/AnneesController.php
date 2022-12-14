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
    public function index(){
        $annees = annees::orderBy('annee_academique','asc')->get();
        return view('annee',compact('annees'));
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
        $annees = annees::orderBy('annee_academique','asc')->get();
        return view('annee',compact('annees'));

        

    }

    public function an(){
        
        $annees = annees::orderBy('annee_academique','asc')->get();
      return view('annee',compact('annees'));
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
