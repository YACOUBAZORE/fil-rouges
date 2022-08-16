<?php

namespace App\Http\Controllers;

use App\Models\entreprises;
use Illuminate\Http\Request;

class EntreprisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function entreprise()
    {
        return view('entreprise');

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
    
            $entreprise = entreprises::create([
                'nom' => $request->nom,
                'email' => $request->email,
                'mot_pass' => $request->mot_pass,
                'confirmer_mot_pass' => $request->confirmer_mot_pass,
                
                
               
            ]);
          
            $entreprises = entreprises::orderBy('nom','asc')->get();
            return view('entreprise',compact('entreprises'));

            
    
        
    }

    public function entrep(){
        
        $entreprises = entreprises::orderBy('nom','asc')->get();

         return view('entreprise',compact('entreprises'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function show(entreprises $entreprises)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function edit(entreprises $entreprises)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entreprises $entreprises)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function destroy(entreprises $entreprises)
    {
        //
    }
}
