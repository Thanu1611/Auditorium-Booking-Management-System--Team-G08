<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'mobile',
        'address',
        'password',
        'role',
        'faculty',
        'department',
        'designation',
        'nic',
        'organization',
        'external_address',
        'purpose',
        'image'

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function auditoria()
    {
        return $this->belongsTo(Auditorium::class);
    }
}
