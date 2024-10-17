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
        Schema::create('residents', function (Blueprint $table) {
            $table->id('resident_id');
            $table->unsignedBigInteger('household_id'); //Foreign Key
            $table->string('image')->nullable(); //Image path
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('birthdate');
            $table->integer('age');
            $table->string('civil_status');
            $table->string('occupation');
            $table->string('education_level');
            $table->integer('contact_number');
            $table->string('address');
            $table->string('purok');
            $table->timestamps();

            $table->foreign('household_id')->references('household_id')->on('households');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
