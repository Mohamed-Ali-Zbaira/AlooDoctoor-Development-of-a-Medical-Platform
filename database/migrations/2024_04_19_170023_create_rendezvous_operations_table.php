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
        Schema::create('rendezvous_operations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id'); // Foreign key to the users table
            $table->unsignedBigInteger('medecin_id');
            $table->dateTime('date');
            $table->text('note')->nullable();
            $table->string('status')->default('pending');
            $table->string('payment_status')->default('unpaid');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_phone')->nullable();
            $table->string('etat')->default('planned');
            $table->timestamps();

            // Set foreign key constraints
            $table->foreign('medecin_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('patient_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rendezvous_operations');
    }
};