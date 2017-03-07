<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_links', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_assign');
            $table->integer('id_content');
            $table->integer('type');//1 kereta/ 2 rute/ 3 objek
            $table->integer('source');//1 orig/ 2 user_content/ 3 dep_content
            $table->string('hash');
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
        Schema::dropIfExists('user_links');
    }
}
