<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatiereNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere_notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prof_id')->nullable();
            $table->foreign('prof_id')->on('users')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('étudient_id')->nullable();
            $table->foreign('étudient_id')->on('users')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('matiere_id')->nullable();
            $table->foreign('matiere_id')->on('matieres')->references('id')->onDelete('cascade');
            $table->double('note');
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
        Schema::dropIfExists('matiere_notes');
    }
}
