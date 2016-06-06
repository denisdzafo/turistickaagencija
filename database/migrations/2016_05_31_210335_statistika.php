<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Statistika extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('destination', function (Blueprint $table) {
        $table->increments('id');
        $table->string('login');
        $table->string('prijava_destinacija');
        $table->string('prijava_na_destinacije');
        $table->string('broj_prodatih_karata');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
