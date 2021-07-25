<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTampilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampilan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('judul');
            $table->string('teks_atas');
            $table->string('teks_bawah');
            $table->string('countdown');
            $table->string('story_judul');
            $table->string('story_subjudul');
            $table->string('gallery');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tampilan');
    }
}
