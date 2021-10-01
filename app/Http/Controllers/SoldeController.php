<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acchats;


class SoldeController extends Controller
{

    public function solde ()
    {
        $som = Acchats::select('salaire','prime','revenuGobal','created_at')
                                 ->orderBy('created_at')->get();

        return view('solde', [
            'som' => $som,
 
         ]); 
    }
    
}
