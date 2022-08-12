<?php

namespace App\Http\Controllers;
use App\Models\logins;
use Illuminate\Http\Request;

class ZoreController extends Controller

{
    public function index(){
        return view("index");
    }


    public function insc(){
        return view("secretaire");
    } 
/*
    public function entreprise(){
        return view("entreprise");
    } 

/*

    public function tuteur(){
        return view("tuteur");
    } 
*/
/*
    public function etudiant(){
        return view("etudiant");
    } 
*/
    public function mail1(){
        return view("mail1");
    } 


    public function liste1(){
        return view("liste1");
    } 


    public function liste2(){
        return view("liste2");
    } 
    public function liste3(){
        return view("liste3");
    } 
    public function liste4(){
        return view("liste4");
    } 


    public function annesco(){
        return view("annesco");
    }


   

}
