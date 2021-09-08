<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentiranjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentiranjes', function (Blueprint $table) {
            $table->string('Ime');
            $table->string('Prezime');
            $table->unsignedBigInteger('Auto');
            $table->foreign('Auto')->references('id')->on('autos')->odDelete('cascade');
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
        Schema::dropIfExists('rentiranjes');
    }
}
