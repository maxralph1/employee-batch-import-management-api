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
        Schema::create('employees', function (Blueprint $table) {
            // $table->ulid('id')->primary();
            // $table->foreignUlid('user_id')->constrained();
            // $table->id();
            $table->string('id');
            $table->string('username');
            $table->string('name_prefix');
            $table->string('first_name');
            $table->string('middle_name_initial');
            $table->string('last_name');
            $table->string('gender');
            $table->string('email');
            // $table->date('date_of_birth');
            $table->string('date_of_birth');
            $table->string('time_of_birth');
            $table->float('age_in_years');
            // $table->date('date_of_joining');
            $table->string('date_of_joining');
            $table->string('age_in_company');
            $table->string('phone_number');
            $table->string('place_name');
            $table->string('county');
            $table->string('city');
            $table->string('zip');
            $table->string('region');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
