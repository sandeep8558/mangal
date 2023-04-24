<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamSubject extends Model
{
    use HasFactory;

    protected $fillable = [
        'examination_id',
        'subject_id',
        'dt',
        'total_marks',
    ];

    public function examination(){
        return $this->belongsTo("App\Models\Examination");
    }

    public function subject(){
        return $this->belongsTo("App\Models\Subject");
    }

    public function exam_subject_invigilators(){
        return $this->hasMany("App\Models\ExamSubjectInvigilator");
    }

    public function exam_classrooms(){
        return $this->hasMany("App\Models\ExamClassroom");
    }
    
}
