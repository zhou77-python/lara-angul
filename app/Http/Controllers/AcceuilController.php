<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscriptions;
use App\Acchats;
use App\Formulaire_achat;
use App\WelcomController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;


class AcceuilController extends Controller
{

    public function vu ()
    {

        return view('acceuil');

    }    

    public function affiche ()
    {
       

        $somme = Acchats::sum('revenuGobal') - Formulaire_achat::sum('prix_total');


        return view('acceuil', [
            'somme' => $somme,
 
         ]); 
        
    }

    public function deconnexion ()
    {
        Auth::logout();

        return redirect('/');
    }

    public function action()
    {
        if(request('salaire') == 0 && request('prime') == 0) {


            return view('acceuil'); 

        }
        
            $achat = \App\Acchats::create([
                    
                'inscriptions_id' => auth()->id(),      
                'salaire' => 0 + request('salaire'),
                'prime' =>  0 + request('prime'),
                'revenuGobal' => request('salaire') + request('prime'),
            ]);    
                
           
       
        return back();
    }

    

}
