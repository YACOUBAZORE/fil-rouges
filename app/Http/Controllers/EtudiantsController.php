<?php

namespace App\Http\Controllers;

use App\Models\etudiants;
use Illuminate\Http\Request;
use App\Models\filieres;
use App\Models\annees;
use App\Models\levels;
use App\Models\statuts;
use App\Models\entreprises;
use App\Models\contrats;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $etudiants = etudiants::orderBy('nom','asc')->get();
        $filieres = filieres::orderBy('nom_filiere','asc')->get();
        $annees = annees::orderBy('annee_academique','asc')->get();
        $levels = levels::orderBy('level','asc')->get();
        $statuts = statuts::orderBy('statut','asc')->get();
        $entreprises = entreprises::orderBy('nom','asc')->get();
        $contrats = contrats::orderBy('contrat','asc')->get();

        return view('etudiant',compact('etudiants','filieres','annees','levels','statuts','entreprises','contrats'));
        
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiant');
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
            'filiere_id' => $request->filiere_id,
            'annee_id' => $request->annee_id,
            'level_id' => $request->level_id,
            'moyenne_1er_semestre' => $request->moyenne_1er_semestre,
            'moyenne_2e_semestre' => $request->moyenne_2e_semestre,
            'statut_id' => $request->statut_id,
            'entreprise_id' => $request->entreprise_id,
            'contrat_id' => $request->contrat_id,
            'email' => $request->email,
            'numero' => $request->numero,
            
            
           
        ]);

        // $etudiants = etudiants::orderBy('nom','asc')->get();
        // $filieres = filieres::orderBy('nom_filiere','asc')->get();
        // $annees = annees::orderBy('annee_academique','asc')->get();
        // $levels = levels::orderBy('level','asc')->get();
        // $statuts = statuts::orderBy('statut','asc')->get();
        // $entreprises = entreprises::orderBy('nom','asc')->get();
        // $contrats = contrats::orderBy('contrat','asc')->get();

        return back()->with("success","Enregistrer avec succès");
             
        
        
        // $etudiants = etudiants::orderBy('nom','asc')->get();

        // return view('etudiant',compact('etudiants'));

    }

//     public function etud(){
        
//         $etudiants = etudiants::orderBy('nom','asc')->get();

//         return view('etudiant',compact('etudiants'));
//    }

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
        $etudiant =  etudiants::find($id);
        return view ("edit", compact("etudiant"));
        
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
        $request->validate([
            'nom' =>'bail |required|',
            'prenom' =>'bail |required|',
            'filiere_id' =>'bail |required|',
            'annee_academique_id' =>'bail |required|',
            'level_id' =>'bail |required|',
            'moyenne_1er_semestre' =>'bail |required|',
            'moyenne_2e_semestre' =>'bail |required|',
            'statut_id' =>'bail |required|',
            'entreprise_id' =>'bail |required|',
            'contrat_id' =>'bail |required|',
            'email' =>'bail |required|',
            'numero' =>'bail |required|',

        ]);
        $etudiant = update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'filiere_id' => $request->filiere_id,
            'annee_academique_id' => $request->annee_academique_id,
            'level_id' => $request->level_id,
            'moyenne_1er_semestre' => $request->moyenne_1er_semestre,
            'moyenne_2e_semestre' => $request->moyenne_2e_semestre,
            'statut_id' => $request->statut_id,
            'entreprise_id' => $request->entreprise_id,
            'contrat_id' => $request->contrat_id,
            'email' => $request->email,
            'numero' => $request->numero,
           

        ]);
        return redirect(route("etudiant.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function destroy(etudiants $etudiants)
    {
        $etudiants->delete();
        return redirect(route('etudiant.index'));
    }
}
