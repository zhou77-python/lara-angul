<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('acchats');
        Schema::create('acchats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('inscriptions_id')->references('inscriptions_id')->on('inscriptions');
            $table->integer('salaire');
            $table->integer('prime');
            $table->integer('revenuGobal');
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
        Schema::dropIfExists('acchats');
    }
}
