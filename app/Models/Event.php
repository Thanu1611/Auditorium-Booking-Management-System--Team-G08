<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameEvent',        
        'detail_event',     
        'booking_date',                
        'start_time',     
        'end_time',                               
        'auditorium',
        'approval_status',
        'payment_status',
        'user',
        'cost',
        'payment'
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function auditoria()
    {
        return $this->belongsTo(Auditorium::class);
    }
}
