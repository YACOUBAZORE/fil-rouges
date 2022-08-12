<?php

namespace App\Http\Controllers;

use App\Models\etudiants;
use Illuminate\Http\Request;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function etudiant(){
        return view("etudiant");
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
        $etudiant = etudiants::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'filiere' => $request->filiere,
            'annee_academique' => $request->annee_academique,
            'niveau_etude' => $request->niveau_etude,
            'moyenne_1er_semestre' => $request->moyenne_1er_semestre,
            'moyenne_2e_semestre' => $request->moyenne_2e_semestre,
            'statut' => $request->statut,
            'entreprise' => $request->entreprise,
            'email' => $request->email,
            'numero' => $request->numero,
            
            
           
        ]);
        return view('etudiant');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function show(etudiants $etudiants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function edit(etudiants $etudiants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, etudiants $etudiants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function destroy(etudiants $etudiants)
    {
        //
    }
}
