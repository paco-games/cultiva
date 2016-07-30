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
            $table->string('description');
            $table->integer('user_id');
            $table->integer('timeProduction');
            $table->string('image');            
            $table->float('estimatedEfficiency');            
            $table->string('period');            
            $table->string('groundType');     
            $table->string('weatherType');
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
