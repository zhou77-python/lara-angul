<?php

namespace App;

use Illuminate\Auth\Events\Logout;
Use Illuminate\Database\Eloquent\Model;
Use Illuminate\contracts\Auth\Authenticatable;
Use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Inscriptions extends Model Implements Authenticatable {

    use BasicAuthenticatable;
    
    protected $table='inscriptions';
    protected $fillable = ['nom', 'prenom', 'email', 'mots_de_passe'];

     /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mots_de_passe;
    }

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

?>

