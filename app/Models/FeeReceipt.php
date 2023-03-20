<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeReceipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_course_id',
        'dt',
        'amount',
        'narration',
    ];
    
}
