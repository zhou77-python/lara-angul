<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Logout;
use App\Inscriptions;
use App\Acchats;


class Cree_compteController extends Controller
{

     public function vu ()
    {

        return view('cree_compte');
    }
    

    public function action()
    {

        if(request('nom') == NULL || request('prenom') == NULL || request('email')== NULL || request('password')== NULL ) {

            
            return view('formulaire_achat'); 
        }

        $inscription = new \App\Inscriptions;

            $inscription->nom = request('nom');
            $inscription->prenom = request('prenom');
            $inscription->email = request('email');
            $inscription->mots_de_passe = bcrypt(request('password'));

            $inscription->save();

        
        
        return back();
    }

    
}
