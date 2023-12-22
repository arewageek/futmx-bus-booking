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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table -> string('user');
            $table -> string('matric');
            $table -> string('passenger');
            $table -> string('phone_number');
            $table -> string('destination');
            $table -> integer('numberOfPassengers');
            $table -> string('departure_time');
            $table -> string('departure_date');
            $table -> string('car_type');
            $table -> string('booking_id') -> unique();
            $table -> string('status') -> default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
