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
        return $this->hasMany("App\Models\ExamSubjects");
    }
    
}
