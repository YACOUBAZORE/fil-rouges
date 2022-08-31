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
use App\Http\Controllers\ContratsController;
use App\Http\Controllers\LevelsController;
use App\Http\Controllers\MessageController;



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



/* enregistre dans la base de donnees*/

Route::resource('etudiant',EtudiantsController::class);
Route::resource('tuteur',TuteursController::class);
Route::resource('annee',AnneesController::class);
Route::resource('filiere',FilieresController::class);
Route::resource('level',LevelsController::class);
Route::resource('statut',StatutsController::class);
Route::resource('contrat',ContratsController::class);



require __DIR__ .'/auth.php';






Route::resource('entreprise',EntreprisesController::class);
