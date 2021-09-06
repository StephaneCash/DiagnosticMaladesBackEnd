<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMal2sTable extends Migration
{
    public function up()
    {
        Schema::create('mal2s', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('type');
            $table->text('symptomes');
            $table->text('description');
            $table->timestamps();
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mal2s');
    }
}
