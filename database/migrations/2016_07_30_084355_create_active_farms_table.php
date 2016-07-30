<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiveFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_farms', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dateInit');
            $table->date('dateEnd');
            $table->float('estimatedProduction');
            $table->float('realProduction');
            $table->integer('seed_id');       
            $table->string('status');
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
        Schema::drop('active_farms');
    }
}
