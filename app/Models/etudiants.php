<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiants extends Model
{
    use  HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'filiere_id',
        'annee_id',
        'level_id',
        'moyenne_1er_semestre',
        'moyenne_2e_semestre',
        'statut_id',
        'entreprise_id',
        'contrat_id',
        'email',
        'numero',
       
    ]; 
    
    public function filiere(){
        return $this->belongsTo(filieres::class,"filiere_id");
    }
    public function annee(){
        return $this->belongsTo(annees::class,"annee_id");
    }
    public function level(){
        return $this->belongsTo(levels::class,"level_id");
    }
    public function statut(){
        return $this->belongsTo(statuts::class,"statut_id");
    }
    public function entreprise(){
        return $this->belongsTo(entreprises::class,"entreprise_id");
    }
    public function contrat(){
        return $this->belongsTo(contrats::class,"contrat_id");
    }
 
}
