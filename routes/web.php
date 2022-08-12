<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoreController;
use App\Http\Controllers\TuteursController;
use App\Http\Controllers\EntreprisesController;
use App\Http\Controllers\EtudiantsController;
use App\Http\Controllers\StatutsController;
use App\Http\Controllers\NiveausController;
use App\Http\Controllers\AnneesController;
use App\Http\Controllers\FilieresController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get("/index",[ZoreController::class,"index"])->name("index");

Route::get("/secretaire",[ZoreController::class,"insc"])->name("secretaire");
Route::get("/etudiant",[EtudiantsController::class,"etudiant"])->name("etudiant");
Route::get("/tuteur",[TuteursController::class,"tuteur"])->name("tuteur");
Route::get("/entreprise",[EntreprisesController::class,"entreprise"])->name("entreprise");
Route::get("/mail1",[ZoreController::class,"mail1"])->name("mail1");
Route::get("/liste1",[ZoreController::class,"liste1"])->name("liste1");
Route::get("/liste2",[ZoreController::class,"liste2"])->name("liste2");
Route::get("/liste3",[ZoreController::class,"liste3"])->name("liste3");
Route::get("/liste4",[ZoreController::class,"liste4"])->name("liste4");
Route::get("/statut",[StatutsController::class,"statut"])->name("statut");
Route::get("/filiere",[FilieresController::class,"filiere"])->name("filiere");
Route::get("/annee",[AnneesController::class,"annee"])->name("annee");

Route::get("/niveau",[NiveausController::class,"niveau"])->name("niveau");


/* enregistre dans la base de donnees*/

Route::post("/ajouttuteur",[TuteursController::class,"store"])->name("Ajout");
Route::post("/ajoutentreprise",[EntreprisesController::class,"store"])->name("Ajout1");
Route::post("/ajoutetudiant",[EtudiantsController::class,"store"])->name("Ajout2");
Route::post("/ajoutstatut",[StatutsController::class,"store"])->name("Ajout3");
Route::post("/ajoutfiliere",[FilieresController::class,"store"])->name("Ajout4");
Route::post("/ajoutannee",[AnneesController::class,"store"])->name("Ajout5");
Route::post("/ajoutniveau",[NiveausController::class,"store"])->name("Ajout6");


/* recupere liste*/
Route::get("/tuteur",[TuteursController::class,"index"])->name("tuteur");
Route::get("/filiere",[FilieresController::class,"filie"])->name("filiere");




require __DIR__ .'/auth.php';