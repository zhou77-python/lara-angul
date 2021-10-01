<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;


class WelcomController extends Controller
{

    public function vu ()
    {
        return view('inscription');
    }
    
    public function action ()
    {

        $resultat = Auth::attempt([
            'email' => request('email'), 
            'password' => request ('password')
        ]); 

        if(Auth::check()){
            if($resultat){

                return redirect('/acceuil')->withInput()->withErrors([
                    'email' => "Vous devez vous connecter",
                ]);;
            }
            }
        return back()->withInput()->withErrors([
            'email' => "Vos identifiants sont incorrectes",
        ]);

          
    }
    
}
