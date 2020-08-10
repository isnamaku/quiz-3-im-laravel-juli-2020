<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengerjaanproyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengerjaanproyek', function (Blueprint $table) {
            $table->bigIncrements('idPengerjaanProyek');
            $table->unsignedBigInteger('idStaff');
            $table->unsignedBigInteger('idManajer');
            $table->unsignedBigInteger('idProyek');
            $table->foreign('idManajer')->references('idManajer')->on('manajer');
            $table->foreign('idStaff')->references('idStaff')->on('staff');
            $table->foreign('idProyek')->references('idProyek')->on('proyek');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengerjaanproyek');
    }
}
