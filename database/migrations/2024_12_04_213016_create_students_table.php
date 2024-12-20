<?php

// Gebruik de Student model in deze seeder file
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Maak de students tabel aan
class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->default('In Behandeling');
            $table->timestamps();
        });
    }


    // Verwijder de students tabel
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
