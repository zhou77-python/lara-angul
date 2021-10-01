<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('inscriptions');
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 40);
            $table->string('prenom', 40);
            $table->string('email', 250)->unique();
            $table->string('mots_de_passe');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
