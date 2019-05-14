<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maisons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('adresse1');
            $table->string('adresse2');
            $table->string('ville');
            $table->string('pays');
            $table->integer('prix_hors_saison');
            $table->integer('prix_saison');
            $table->text('description');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maisons');
    }
}
