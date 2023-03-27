<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamSubjectInvigilator extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_subject_id',
        'staff_id',
    ];

    public function exam_subject(){
        return $this->belongsTo("App\Models\ExamSubject");
    }

    public function staff(){
        return $this->belongsTo("App\Models\Staff");
    }
    
}
