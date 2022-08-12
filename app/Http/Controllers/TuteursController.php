<?php

namespace App\Http\Controllers;

use App\Models\tuteurs;
use Illuminate\Http\Request;

class TuteursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        public function tuteur(){
            return view("tuteur");
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
        $tuteur = tuteurs::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'numero' => $request->numero,
            'mot_pass' => $request->mot_pass,
            'confirmer_mot_pass' => $request->confirmer_mot_pass,
            
            
            
        ]);
        $tuteurs = tuteurs::orderBy('nom','asc')->get();
        return view('tuteur',compact('tuteurs'));


        

    }

    public function index(){
        
        $tuteurs = tuteurs::orderBy('nom','asc')->get();

         return view('tuteur',compact('tuteurs'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tuteurs  $tuteurs
     * @return \Illuminate\Http\Response
     */
    public function show(tuteurs $tuteurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tuteurs  $tuteurs
     * @return \Illuminate\Http\Response
     */
    public function edit(tuteurs $tuteurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tuteurs  $tuteurs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tuteurs $tuteurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tuteurs  $tuteurs
     * @return \Illuminate\Http\Response
     */
    public function destroy(tuteurs $tuteurs)
    {
        //
    }
}
