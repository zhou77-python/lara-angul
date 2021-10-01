<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Acchats extends Model
{
    
    protected $table= 'acchats';
    protected $fillable = ['inscriptions_id', 'salaire', 'prime', 'revenuGobal'];




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
