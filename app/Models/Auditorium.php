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
        'admin',
        'cost'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class,'auditorium', 'id');
    }
}
