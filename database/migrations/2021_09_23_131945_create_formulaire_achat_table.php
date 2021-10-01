<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulaireAchatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('formulaire_achat');
        Schema::create('formulaire_achat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inscriptions_id')->references('inscriptions_id')->on('inscriptions');
            $table->string('depense');
            $table->string('article');
            $table->integer('quantite');
            $table->integer('prix');
            $table->integer('prix_total');
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
        Schema::dropIfExists('formulaire_achat');
    }
}
