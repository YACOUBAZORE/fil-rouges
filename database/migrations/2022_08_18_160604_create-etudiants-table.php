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
            $table->foreignId('filiere_id')->contrained();
            $table->foreignId('annee_id')->contrained();
            $table->foreignId('level_id')->contrained();
            $table->string('moyenne_1er_semestre');
            $table->string('moyenne_2e_semestre');
            $table->foreignId('statut_id')->contrained();
            $table->foreignId('entreprise_id')->contrained();
            $table->foreignId('contrat_id')->contrained();
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
