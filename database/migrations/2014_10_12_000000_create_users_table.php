<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('username')->default(''); // Provide an empty string as the default value
            $table->string('email')->unique();
            $table->string('google_id')->nullable();
            $table->string('password')->nullable();
            $table->string('role');
            $table->string('NomClinic')->nullable();
            $table->string('statut')->default('connecter');
            $table->string('numero_telephone')->nullable();
            $table->string('image')->nullable();
            $table->string('adresse')->nullable();
            $table->string('etat')->default('inverifier');
            $table->string('speciality')->nullable();
            $table->string('document')->nullable();
            $table->string('description')->nullable();
            $table->string('localisation_link')->nullable();
            $table->string('langue_parles')->nullable();
            $table->string('temps')->nullable();
            $table->string('tarifs')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
