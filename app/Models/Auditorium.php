<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditorium extends Model
{

    use HasFactory;
    protected $fillable = [
        'nameAudi',
        'capacity',
        'description',
        'images',
        'admin'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
