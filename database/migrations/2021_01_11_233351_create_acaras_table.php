<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acara', function (Blueprint $table) {
            $table->id();
            $table->string('cidnr');
            $table->string('eventnr');
            $table->string('name1');
            $table->string('descr');
            $table->string('locnm');
            $table->string('city');
            $table->string('addrs');
            $table->date('date');
            $table->time('bgtime' , 0);
            $table->time('edtime' , 0);
            $table->string('flag_main');
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
        Schema::dropIfExists('acara');
    }
}
