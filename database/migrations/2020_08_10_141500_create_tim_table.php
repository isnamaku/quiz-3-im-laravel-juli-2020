<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tim', function (Blueprint $table) {
            $table->bigIncrements('idTim');
            $table->unsignedBigInteger('idStaff');
            $table->unsignedBigInteger('idManajer');
            $table->foreign('idManajer')->references('idManajer')->on('manajer');
            $table->foreign('idStaff')->references('idStaff')->on('staff');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tim');
    }
}
