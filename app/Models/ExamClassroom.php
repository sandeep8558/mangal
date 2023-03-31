<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamClassroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'examination_id',
        'classroom_id',
        'slots'
    ];
}
