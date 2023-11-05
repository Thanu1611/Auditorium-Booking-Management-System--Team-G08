<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailVerification extends Model
{
    use HasFactory;
    protected $table = 'email_verifications'; // Assuming you have a 'email_verifications' table in your database

    protected $fillable = [
        'email', // Email associated with the verification
        'otp',   // The OTP value
        'created_at', // Timestamp when the OTP was created
        'updated_at'
    ];
}
