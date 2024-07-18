<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

        protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'phone_number',
        'mailing_address',
        'city',
        'province',
        'postal_code',
        'email',
        'emergency_contact_name',
        'emergency_contact_relationship',
        'emergency_contact_phone',
        'emergency_contact_email',
        'agm_package',
        'consent',
        'volunteer_activities',
        'other_activity',
        'agreement',
        'is_active',
        'is_membership_paid',
        'membership_paid_date'
    ];

}
