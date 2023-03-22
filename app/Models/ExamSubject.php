<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamSubject extends Model
{
    use HasFactory;

    protected $fillable = [
        'classroom_id',
        'examination_id',
        'subject_id',
        'dt',
        'slots',
    ];
    
}