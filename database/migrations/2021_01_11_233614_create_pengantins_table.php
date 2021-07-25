<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengantinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengantin', function (Blueprint $table) {
            $table->id();
            $table->string('cidnr');
            $table->string('cppname');
            $table->string('cppbio');
            $table->string('cppig');
            $table->string('cpwname');
            $table->string('cpwbio');
            $table->string('cpwig');
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
        Schema::dropIfExists('pengantin');
    }
}
