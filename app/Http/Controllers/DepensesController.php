<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Logout;
use App\Formulaire_achat;
use App\Acchats;


class DepensesController extends Controller
{

    public function depenses()
    {
        $dep = Formulaire_achat::select('depense','article','quantite','prix','prix_total','created_at')
                                 ->orderBy('depense')->get();

        return view('depenses', [
            'dep' => $dep,
 
         ]); 
    }
    
}
