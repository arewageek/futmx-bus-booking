<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'matric',
        'passenger',
        'phone_number',
        'destination',
        'numberOfPassengers',
        'departure_time',
        'departure_date',
        'car_type',
        'booking_id'
    ];

    protected $table = "booking";
}
