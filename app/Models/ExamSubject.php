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

    public function examination(){
        return $this->belongsTo("App\Models\Examination");
    }

    public function subject(){
        return $this->belongsTo("App\Models\Subject");
    }

    public function classroom(){
        return $this->belongsTo("App\Models\Classroom");
    }

    public function exam_subject_invigilators(){
        return $this->hasMany("App\Models\ExamSubjectInvigilator");
    }
    
}
