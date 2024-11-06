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
        Schema::table('rendezvous_operations', function (Blueprint $table) {
            $table->unsignedBigInteger('operation_id')->after('patient_id');
            $table->foreign('operation_id')->references('id')->on('operations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('rendezvous_operations', function (Blueprint $table) {
            $table->dropForeign(['operation_id']);
            $table->dropColumn('operation_id');
        });
    }
};
