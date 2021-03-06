<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Maladies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maladies', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('type');
            $table->text('symptomes');
            $table->text('description');
            $table->timestamps();
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maladies');
    }
}
