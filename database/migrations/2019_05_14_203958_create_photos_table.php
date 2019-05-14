<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->integer('maison_id')->unsigned();
            $table->foreign('maison_id')->references('id')->on('maisons');
            $table->increments('id');
            $table->string('url');
            $table->string('description');
        });

        // Schema::table('photos', function (Blueprint $table) {
        //     
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
