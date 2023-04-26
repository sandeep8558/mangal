<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'examination_id',
        'student_course_id',
    ];

    public function examination(){
        return $this->belongsTo("App\Models\Examination");
    }

    public function student_course(){
        return $this->belongsTo("App\Models\StudentCourse");
    }
}
