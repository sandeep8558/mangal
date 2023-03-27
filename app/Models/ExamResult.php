<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_course_id',
        'examination_id',
    ];

    public function examination(){
        return $this->belongsTo("App\Models\Examination");
    }

    public function student_course(){
        return $this->belongsTo("App\Models\StudentCourse");
    }

    public function exam_result_marks(){
        return $this->hasMany("App\Models\ExamResultMark");
    }
    
}
