<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'display',
        'classroom_name',
        'description',
        'seating_capacity',
        'pc_capacity',
        'slots',
    ];
    
}
