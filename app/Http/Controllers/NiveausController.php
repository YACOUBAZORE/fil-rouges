<?php

namespace App\Http\Controllers;

use App\Models\niveaus;
use Illuminate\Http\Request;

class NiveausController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function niveau(){
        return view("niveau");
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
        $niveau = niveaus::create([
            'niveau_etude' => $request->niveau_etude
        ]);

        $niveaus = niveaus::orderBy('niveau_etude','asc')->get();
        return view('niveau',compact('niveaus'));

    }

    public function niv (){
        
        $niveaus = niveaus::orderBy('niveau_etude','asc')->get();

         return view('niveau',compact('niveaus'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\niveaus  $niveaus
     * @return \Illuminate\Http\Response
     */
    public function show(niveaus $niveaus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\niveaus  $niveaus
     * @return \Illuminate\Http\Response
     */
    public function edit(niveaus $niveaus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\niveaus  $niveaus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, niveaus $niveaus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\niveaus  $niveaus
     * @return \Illuminate\Http\Response
     */
    public function destroy(niveaus $niveaus)
    {
        //
    }
}
