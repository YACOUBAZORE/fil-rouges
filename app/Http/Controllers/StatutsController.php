<?php

namespace App\Http\Controllers;

use App\Models\statuts;
use Illuminate\Http\Request;

class StatutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function statut(){
        return view("statut");
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
        $statut = statuts::create([
            'statut' => $request->statut,
            
            
           
        ]);
        return view('statut');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\statuts  $statuts
     * @return \Illuminate\Http\Response
     */
    public function show(statuts $statuts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\statuts  $statuts
     * @return \Illuminate\Http\Response
     */
    public function edit(statuts $statuts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\statuts  $statuts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, statuts $statuts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\statuts  $statuts
     * @return \Illuminate\Http\Response
     */
    public function destroy(statuts $statuts)
    {
        //
    }
}
