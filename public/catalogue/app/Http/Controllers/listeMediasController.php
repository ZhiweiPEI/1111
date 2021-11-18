<?php

namespace App\Http\Controllers;


class listeMediasController extends Controller
{
    public function getListeMedias() {
        return view('listeMedias');
    }
    
    public function getListeMediasWithElements($type, $annee) {
        return view('listeMedias', ['type' => $type, 'annee' => $annee]);
    }
  
}
?>