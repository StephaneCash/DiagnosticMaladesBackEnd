<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('postnom');
            $table->string('prenom');
            $table->string('specialte');
            $table->string('adress');
            $table->string('contact');
            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
