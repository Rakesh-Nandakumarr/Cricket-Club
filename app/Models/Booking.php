<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $fillable = [
        'name',
        'current_member',
        'address',
        'phone',
        'email',
        'booking_date',
        'start_time',
        'finish_time',
        'function_type',
        'function_nature',
    ];
    use HasFactory;
}
