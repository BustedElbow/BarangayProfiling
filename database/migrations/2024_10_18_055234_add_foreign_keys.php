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
        Schema::table('users', function (Blueprint $table) {
          $table->foreign('resident_id')->references('resident_id')->on('residents');
          $table->foreign('role')->references('role_id')->on('roles');
        });

        // Schema::table('residents', function (Blueprint $table) {
        //   $table->foreign('household_id')->references('household_id')->on('households');
        // });

        Schema::table('households', function (Blueprint $table) {
          $table->foreign('household_head')->references('resident_id')->on('residents');
        });

        Schema::table('household_members', function (Blueprint $table) {
          $table->foreign('household_id')->references('household_id')->on('households');
          $table->foreign('resident_id')->references('resident_id')->on('residents');
        });
        
        Schema::table('officials', function (Blueprint $table) {
          $table->foreign('resident_id')->references('resident_id')->on('residents');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
