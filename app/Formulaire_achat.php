<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Formulaire_achat extends Model
{
    protected $table='formulaire_achat';
    protected $fillable = ['inscriptions_id','depense','article','quantite','prix','prix_total'];



     /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return '';
    }
    
}
