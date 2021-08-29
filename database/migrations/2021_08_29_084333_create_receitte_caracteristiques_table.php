<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceitteCaracteristiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitte_caracteristiques', function (Blueprint $table) {
            $table->id();
            $table->string('menu');
            $table->foreignId('receitte_categorie_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->integer('duree');
            $table->string('difficulte');
            $table->integer('depense');
            $table->integer('personne');
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
        Schema::dropIfExists('receitte_caracteristiques');
    }
}
