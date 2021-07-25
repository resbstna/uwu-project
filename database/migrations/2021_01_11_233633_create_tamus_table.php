<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu', function (Blueprint $table) {
            $table->id();
            $table->string('cidnr');
            $table->string('gstnr');
            $table->string('grptype');
            $table->string('name');
            $table->string('email');
            $table->string('telph');
            $table->string('addrs');
            $table->string('status');
            $table->string('flag_vip');
            $table->string('flag_print');
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
        Schema::dropIfExists('tamu');
    }
}
