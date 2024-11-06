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
        Schema::create('rendezvous', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Patient_id');
            $table->unsignedBigInteger('medecin_id')->nullable();
            $table->date('date');
            $table->time('time');
            $table->text('note')->nullable();
            $table->string('status')->default('en_attente'); // Ajout de l'état du rendez-vous
            $table->integer('duration')->nullable(); // Durée estimée du rendez-vous
            $table->string('location')->nullable(); // Lieu du rendez-vous
            $table->string('reason')->nullable(); // Raison du rendez-vous
            $table->boolean('reminder_sent')->default(false); // Rappel envoyé ou non
            $table->string('payment_status')->nullable(); // État du paiement
            $table->timestamps();
            $table->string('user_name')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_phone')->nullable();
            $table->foreign('Patient_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('medecin_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendezvous');
    }
};