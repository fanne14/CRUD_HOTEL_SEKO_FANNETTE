<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_hotel',
        'description',
        'name_room',
        'price',
        'number_bed',
        'max_adult',
        'max_child',
        'attributes',
        'statut',
        
    ];
}
