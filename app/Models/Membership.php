<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'phone_number', 'mailing_address', 'postal_code', 'email', 'is_active', 'is_membership_paid', 'membership_paid_date'];
}
