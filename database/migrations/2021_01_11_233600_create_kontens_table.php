<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konten', function (Blueprint $table) {
            $table->id();
            $table->string('cidnr');
            $table->string('temnr');
            $table->string('langu');
            $table->string('soundnr');
            $table->string('flag_header');
            $table->string('htitle');
            $table->string('teks_top');
            $table->string('teks_bottom');
            $table->string('flag_disp_tgl');
            $table->string('hbackground');
            $table->string('flag_couple');
            $table->string('ctitle');
            $table->string('csubtitle');
            $table->string('sype_seq');
            $table->string('flag_countdown');
            $table->string('flag_story');
            $table->string('flag_gallery');
            $table->string('flag_comment');
            $table->string('flag_footer');
            $table->string('ftext');
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
        Schema::dropIfExists('kontens');
    }
}
