<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('ville');
            $table->float('tarifs');
            $table->dateTime('date');
            $table->string('duree');
            $table->text('description')->nullable();
            $table->string('medecin');
            $table->string('image')->nullable();
            $table->string('etablissement_medical');
            $table->integer('numero_chambre')->nullable();
            $table->string('statut');
            $table->text('complications')->nullable();
            $table->text('preparatifs_pre_operatoires')->nullable();
            $table->text('suivi_post_operatoire')->nullable();
            $table->text('documents_associes')->nullable();
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operations');
    }
};
