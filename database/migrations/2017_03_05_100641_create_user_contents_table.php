<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('id_user');
            $table->integer('id_assign');
            $table->integer('type');//1 kereta/ 2 rute/ 3 objek
            $table->integer('id_content');
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
        Schema::dropIfExists('user_contents');
    }
}
