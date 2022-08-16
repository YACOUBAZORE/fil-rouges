<?php

namespace App\Http\Controllers;

use App\Models\contrats;
use Illuminate\Http\Request;

class ContratsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contrat()
    {
        return view('contrat');
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
        {
    
            $contrat = contrats::create([
                'contrat' => $request->contrat,
                 
            ]);
            $contrats = contrats::orderBy('contrat','asc')->get();
            return view('contrat',compact('contrats'));
    
    
        
    }



    }

    public function cont(){
        
        $contrats = contrats::orderBy('contrat','asc')->get();
       return view('contrat',compact('contrats'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contrats  $contrats
     * @return \Illuminate\Http\Response
     */
    public function show(contrats $contrats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contrats  $contrats
     * @return \Illuminate\Http\Response
     */
    public function edit(contrats $contrats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contrats  $contrats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contrats $contrats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contrats  $contrats
     * @return \Illuminate\Http\Response
     */
    public function destroy(contrats $contrats)
    {
        //
    }
}
