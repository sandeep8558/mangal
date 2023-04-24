<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_name',
    ];

    public function exam_batches(){
        return $this->hasMany("App\Models\ExamBatch");
    }

    public function exam_results(){
        return $this->hasMany("App\Models\ExamResult");
    }

    public function exam_subjects(){
        return $this->hasMany("App\Models\ExamSubject");
    }

    public function exam_students(){
        return $this->hasMany("App\Models\ExamStudent");
    }

    public static function boot(){
        parent::boot();
        static::deleting(function($exam){
            $exam->exam_batches()->delete();
            $exam->exam_students()->delete();
            $exam->exam_results()->delete();
            foreach($exam->exam_subjects()->get() as $sub){
                $sub->exam_subject_invigilators()->delete();
                $sub->exam_classrooms()->delete();
            }
            $exam->exam_subjects()->delete();
        });
    }
    
}
