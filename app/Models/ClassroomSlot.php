<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassroomSlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'name',
        'description',
        'from',
        'to',
        'minutes',
    ];
    
}
