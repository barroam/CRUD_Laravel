<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{

  public function Liste_etudiants (){
    return view('etudiant.liste');
  }

  public function Ajouter_etudiants(){
    return view('etudiant.ajout');
  }

  public function ajout_etudiant_traitement (Request $request){
$request->validate([
    'nom' => 'required',
    'prenom'=> 'required',
    'classe'=> 'required',
]);

$etudiant = new Etudiant();
$etudiant->nom = $request->nom;
$etudiant->prenom = $request->prenom;
$etudiant->classe = $request->classe;
$etudiant->save();
return redirect('/ajout')->with('status','L\'étudiant a bien été enregistrer ');
  }



}
