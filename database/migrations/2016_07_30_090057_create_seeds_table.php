<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seeds', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('id_general');
            $table->string('description');
            $table->integer('price');
            $table->integer('gestation');
            $table->integer('harvest');
            $table->integer('numseeds');
            $table->integer('efficiency');
            $table->string('period');
            $table->string('typeground');           
            $table->string('weatherType');
            $table->string('path'); 
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
        Schema::drop('seeds');
    }
}
