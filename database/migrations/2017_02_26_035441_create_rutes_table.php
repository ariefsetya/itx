<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('stasiun');
            $table->integer('fiksi');
            $table->integer('realscale');
            $table->string('photo');
            $table->string('creator');
            $table->text('description');
            $table->string('versi');
            $table->text('kuid');
            $table->string('status');
            $table->integer('open');
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
        Schema::dropIfExists('rutes');
    }
}
