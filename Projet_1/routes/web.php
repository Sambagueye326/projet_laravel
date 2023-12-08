<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    /*$apprenant=new \App\Models\Apprenant();
    $formation = new \App\Models\Formation();
    $apprenant->id= 1;
    $apprenant->nom="Diop";
    $apprenant->prenom="Modou";
    $apprenant->age=23;
    $apprenant->save();

    $formation->id=1;
    $formation->nom=" Génie Logiciel";
    $formation->duree="3 ans";
    $formation->cout=3000000;
    $formation->save();*/

    return view('welcome');
});

Route::get('/liste-apprenants',[\App\Http\Controllers\ApprenantController::class,'index'])->name("liste-apprenants");

Route::get('/liste-formations',[\App\Http\Controllers\FormationController::class,'index'])->name("liste-formations");;

