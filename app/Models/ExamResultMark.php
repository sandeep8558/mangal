<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResultMark extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_result_id',
        'subject_id',
        'total_marks',
        'obtained_marks',
        'remark',
    ];
    
}
