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
            $table->string('nama');
            $table->string('seri');
            $table->integer('realscale');
            $table->string('jenis');
            $table->string('subjenis');
            $table->string('photo')->nullable();
            $table->string('creator');
            $table->string('reskin')->nullable();
            $table->text('description')->nullable();
            $table->string('versi');
            $table->text('kuid');
            $table->string('status');
            $table->integer('open');
            $table->timestamps();
        });
        $n = new \App\Kereta;
        $n->nama = "Lokomotif CC201 45";
        $n->seri = "CC201 45";
        $n->jenis = "lokomotif";
        $n->subjenis = "CC201";
        $n->realscale = 1;
        $n->photo = "https://z-1-scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/16836419_10202816511249647_8838826064716381958_o.jpg?oh=aa95872eed3662dd207fe7b027acf512&oe=597023AC";
        $n->creator = "KAI";
        $n->reskin = "";
        $n->description = null;
        $n->versi = "1";
        $n->kuid = "";
        $n->status = "Free";
        $n->open = 1;
        $n->save();
        $n = new \App\Kereta;
        $n->nama = "Lokomotif CC201 46";
        $n->seri = "CC201 46";
        $n->jenis = "lokomotif";
        $n->subjenis = "CC201";
        $n->realscale = 1;
        $n->photo = "https://z-1-scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/16836419_10202816511249647_8838826064716381958_o.jpg?oh=aa95872eed3662dd207fe7b027acf512&oe=597023AC";
        $n->creator = "KAI";
        $n->reskin = "";
        $n->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $n->versi = "1";
        $n->kuid = "";
        $n->status = "PLU";
        $n->open = 1;
        $n->save();
        $n = new \App\Kereta;
        $n->nama = "Lokomotif CC201 47";
        $n->seri = "CC201 47";
        $n->jenis = "lokomotif";
        $n->subjenis = "CC201";
        $n->realscale = 1;
        $n->photo = "https://z-1-scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/16836419_10202816511249647_8838826064716381958_o.jpg?oh=aa95872eed3662dd207fe7b027acf512&oe=597023AC";
        $n->creator = "KAI";
        $n->reskin = "";
        $n->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
        $n->versi = "1";
        $n->kuid = "";
        $n->status = "PLU";
        $n->open = 1;
        $n->save();
        $n = new \App\Kereta;
        $n->nama = "Lokomotif CC201 45";
        $n->seri = "CC201 45";
        $n->jenis = "lokomotif";
        $n->subjenis = "CC201";
        $n->realscale = 1;
        $n->photo = "https://z-1-scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/16836419_10202816511249647_8838826064716381958_o.jpg?oh=aa95872eed3662dd207fe7b027acf512&oe=597023AC";
        $n->creator = "KAI";
        $n->reskin = "";
        $n->description = null;
        $n->versi = "1";
        $n->kuid = "";
        $n->status = "Free";
        $n->open = 1;
        $n->save();
        $n = new \App\Kereta;
        $n->nama = "Lokomotif CC201 46";
        $n->seri = "CC201 46";
        $n->jenis = "lokomotif";
        $n->subjenis = "CC201";
        $n->realscale = 1;
        $n->photo = "https://z-1-scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/16836419_10202816511249647_8838826064716381958_o.jpg?oh=aa95872eed3662dd207fe7b027acf512&oe=597023AC";
        $n->creator = "KAI";
        $n->reskin = "";
        $n->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $n->versi = "1";
        $n->kuid = "";
        $n->status = "PLU";
        $n->open = 1;
        $n->save();
        $n = new \App\Kereta;
        $n->nama = "Lokomotif CC201 47";
        $n->seri = "CC201 47";
        $n->jenis = "lokomotif";
        $n->subjenis = "CC201";
        $n->realscale = 1;
        $n->photo = "https://z-1-scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/16836419_10202816511249647_8838826064716381958_o.jpg?oh=aa95872eed3662dd207fe7b027acf512&oe=597023AC";
        $n->creator = "KAI";
        $n->reskin = "";
        $n->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
        $n->versi = "1";
        $n->kuid = "";
        $n->status = "PLU";
        $n->open = 1;
        $n->save();
        $n = new \App\Kereta;
        $n->nama = "Lokomotif CC206 13 23";
        $n->seri = "CC206 13 23";
        $n->jenis = "lokomotif";
        $n->subjenis = "CC206";
        $n->realscale = 1;
        $n->photo = "https://z-1-scontent-sit4-1.xx.fbcdn.net/v/t1.0-0/q86/s480x480/16640786_10202793246148034_4780125488409152154_n.jpg?oh=ef51ecb3d4ecf105828bd7dfd0d09f33&oe=592F317B";
        $n->creator = "KAI";
        $n->reskin = "";
        $n->description = null;
        $n->versi = "1";
        $n->kuid = "";
        $n->status = "Free";
        $n->open = 1;
        $n->save();
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
