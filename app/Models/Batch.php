<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'classroom_type',
        'classroom_id',
        'batch_name',
        'effective_from',
        'effective_till',
        'sessions',
        'batch_type',
        'mon_slots',
        'tue_slots',
        'wed_slots',
        'thu_slots',
        'fri_slots',
        'sat_slots',
        'sun_slots',
    ];
    
}
