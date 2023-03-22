<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_id',
        'student_course_id',
    ];

    public function batch(){
        return $this->belongsTo("App\Models\Batch");
    }

    public function student_course(){
        return $this->belongsTo("App\Models\StudentCourse");
    }

    protected $appends = ['student_data', 'batch_name'];

    public function getStudentDataAttribute(){
        return $this->student_course->student_data;
    }

    public function getBatchNameAttribute(){
        return $this->batch->batch_name;
    }
    
}
