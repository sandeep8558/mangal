<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourseDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_course_id',
        'all_document_id',
        'media',
    ];

    public function student_course(){
        return $this->belongsTo("App\Models\StudentCourse");
    }

    public function document(){
        return $this->belongsTo("App\Models\AllDocument");
    }
}
