<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCliniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliniques', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->unsignedBigInteger('user_id');
            $table->string('ville');
            $table->string('email');
            $table->string('numero_telephone');
            $table->string('localisation_link')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliniques');
    }
}
