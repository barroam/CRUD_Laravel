<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

Route::get('/etudiant', [EtudiantController::class, 'Liste_etudiants']);
Route::get('/ajout', [EtudiantController::class, 'Ajouter_etudiants']);
Route::post('/ajout/traitement',[EtudiantController::class,'ajout_etudiant_traitement']);