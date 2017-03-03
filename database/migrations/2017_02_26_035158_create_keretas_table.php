<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeretasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keretas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->string('nama');
            $table->string('seri');
            $table->integer('realscale');
            $table->string('jenis');
            $table->string('subjenis');
            $table->string('photo')->nullable();
            $table->string('creator');
            $table->string('reskin')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('keretas');
    }
}
