<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRangkaianAcarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rangkaian_acara', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_acara');
            $table->string('waktu_acara');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rangkaian_acara');
    }
}
