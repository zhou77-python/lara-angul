<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



use Illuminate\Support\Facades\Auth;
use Monolog\Handler\NewRelicHandler;
use PhpParser\Node\Expr\AssignOp\Div;

Route::get('/', 'WelcomController@vu');
Route::post('/', 'WelcomController@action');

Route::get('/cree_compte', 'Cree_compteController@vu');
Route::post('/cree_compte', 'Cree_compteController@action');


Route::group([

    'middleware' => 'App\Http\Middleware\Securite',

], function ()  {


        Route::get('/acceuil', 'AcceuilController@vu'); 
        Route::get('/acceuil', 'AcceuilController@affiche');
        Route::post('/acceuil', 'AcceuilController@action');



        Route::get('/formulaire_achat', 'Formulaire_achatController@vu');
        Route::post('/formulaire_achat', 'Formulaire_achatController@action');


        Route::get('/depenses', 'DepensesController@depenses');
        Route::get('/solde', 'SoldeController@solde');

        Route::get('/deconnexion', 'AcceuilController@deconnexion');
        Route::get('/deconnexion', 'Formulaire_achatController@deconnexion');


});

