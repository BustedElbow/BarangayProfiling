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
        Schema::create('household_members', function (Blueprint $table) {
          $table->id('h_member_id');
          $table->unsignedBigInteger('household_id');
          $table->unsignedBigInteger('resident_id');
          $table->string('relationship');
          $table->timestamps();

          $table->foreign('household_id')->references('household_id')->on('households');
          $table->foreign('resident_id')->references('resident_id')->on('residents');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('household_members');
    }
};
