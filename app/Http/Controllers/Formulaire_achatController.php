<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Logout;
use App\Formulaire_achat;
use App\Acchats;
use Illuminate\Support\Facades\Auth;


class Formulaire_achatController extends Controller
{

    public function vu ()
    {

        return view('formulaire_achat');
    }

    public function deconnexion ()
    {
        Auth::logout();

        return redirect('/');
    }


    public function action ()
    {
        $sum = Acchats::sum('revenuGobal');
        $dep = Formulaire_achat::sum('prix_total');


        if(request('article') == NULL || request('quantite') == 0 || request('prix')== 0 ) {


            return view('formulaire_achat'); 
        }

        if( $sum < $dep ) {
            return back();

        }
        

        $formulaire = new \App\Formulaire_achat;

        $formulaire->inscriptions_id = auth()->id();
        $formulaire->depense = request('depense');
        $formulaire->article = request('article');
        $formulaire->quantite = request('quantite');
        $formulaire->prix = request('prix');
        $formulaire->prix_total = $formulaire->prix * $formulaire->quantite;

        $formulaire->save();


        return back();

    }

    
}
