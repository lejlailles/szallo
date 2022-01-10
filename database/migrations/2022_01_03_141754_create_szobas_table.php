<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSzobasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('szobas', function (Blueprint $table) {
           // $table->id();
           $table->unsignedBigInteger('szam')->primary();
           $table->string('leiras',45);
           $table->integer('ar');
           $table->integer('agySzam');
           $table->string('lehet_potagy');

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
        Schema::dropIfExists('szobas');
    }
}
