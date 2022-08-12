<?php

namespace App\Http\Controllers;

use App\Models\filieres;
use Illuminate\Http\Request;

class FilieresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filiere(){
        return view("filiere");
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
        $filiere = filieres::create([
            'nom_filiere' => $request->nom_filiere,
            
           
        ]);

        return view('filiere');

    }


    public function filie(){
        
        $filieres = filieres::orderBy('nom_filiere','asc')->get();

        return view('filiere',compact('filieres'));
   }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\filieres  $filieres
     * @return \Illuminate\Http\Response
     */
    public function show(filieres $filieres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\filieres  $filieres
     * @return \Illuminate\Http\Response
     */
    public function edit(filieres $filieres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\filieres  $filieres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, filieres $filieres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\filieres  $filieres
     * @return \Illuminate\Http\Response
     */
    public function destroy(filieres $filieres)
    {
        //
    }
}
