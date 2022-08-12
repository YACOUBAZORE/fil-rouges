<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->foreignId('filieres_id')->contrained();
            $table->foreignId('annee_academiques_id')->contrained();
            $table->foreignId('niveau_etudes_id')->contrained();
            $table->string('moyenne_1er_semestre');
            $table->string('moyenne_2e_semestre');
            $table->foreignId('statuts_id')->contrained();
            $table->foreignId('entreprises_id')->contrained();
            $table->string('email')->unique();
            $table->string('numero')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
