<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendegs', function (Blueprint $table) {
            //$table->id();
            $table->increments('vAzon');
            $table->string('vNev',45);
            $table->string('vCim',55);
            $table->string('vUtlevszam',10);
            $table->string('vtel',12);
        
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
        Schema::dropIfExists('vendegs');
    }
}
