<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $dateFormat = 'U'; // Use Unix timestamp for date fields
    protected $dates = [];
    protected $fillable = [
        'nameFacility',        
        'detail_Facility',     
        'cost',           
        'auditorium',
    ];
}
