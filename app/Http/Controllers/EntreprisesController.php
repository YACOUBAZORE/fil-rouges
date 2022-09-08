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
    public function index()
    {
        
        $entreprises = entreprises::orderBy('nom','asc')->get();

         return view('entreprise',compact('entreprises'));

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
    // public funcion edit('$id')
    // {
    //     $entreprises = entreprises::find($id);
    //     return view('edit');
    // }

    // public function entrep(){
        
    //     $entreprises = entreprises::orderBy('nom','asc')->get();

    //      return view('entreprise',compact('entreprises'));
    // }

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
    public function edit(entreprises $entreprises, $id)
    {$entreprise =  entreprises::find($id);
        return view ("edit", compact("entreprise"));
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, entreprises $entreprises)
    // {
    //     $request->validate([
    //         'nom' =>'bail |required|',
    //         'email' => 'bail |required|',
    //         'mot_pass' => 'bail |required|',
            
            
           
    //     ]);

        
    //     $entreprise = entreprises::update([
    //         'nom' => $request->nom,
    //         'email' => $request->email,
    //         'mot_pass' => $request->mot_pass,
    //         'confirmer_mot_pass' => $request->confirmer_mot_pass,
    //         ]);
   
    //     return redirect(route("entreprise.index"));

    // }


    public function update(Request $request, $id)
{
    $request->validate([
        
                    'nom' =>'bail |required|',
                    'email' => 'bail |required|',
                     
                    
                    
        
        
        ]);
        $entreprise = $entreprises::find($id);
        $entreprise->nom = $request->nom;
        $entreprise->email = $request->email;
        $entreprise->mot_pass= $request->mot_pass;
       
        $entreprise->save();
return redirect()->route('$entreprise')
->with('success','Spécialité mis à jour avec succès');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function destroy(entreprises $entreprises)
    {
        $entreprise =  entreprises::find($id);
        $entreprises->delete();
        return redirect(route('entreprise.index'));
    }
}
