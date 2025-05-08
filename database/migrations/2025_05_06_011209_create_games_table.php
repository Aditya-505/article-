<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
           $table->BigIncrements('id');
           $table->string('judul');
           $table->string('deskripsi');
           $table->string('foto');
           $table->string('penulis');

            $table->unsignedBigInteger('id_genre');
        //relasi
        $table->foreign('id_genre')->references('id')->on('genres')->onDelete('cascade');

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
        Schema::dropIfExists('games');
    }
};
