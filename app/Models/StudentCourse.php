<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'student_id',
        'category_id',
        'course_id',
        'course_instrument_id',
        'instrument_amount',
        'actual_fees_amount',
        'discount',
        'fees_amount',
        'admission_at',
        'effective_from',
        'effective_till',
    ];

    public function branch(){
        return $this->belongsTo("App\Models\Branch");
    }

    public function student(){
        return $this->belongsTo("App\Models\Student");
    }

    public function category(){
        return $this->belongsTo("App\Models\CourseCategory", 'category_id');
    }

    public function course(){
        return $this->belongsTo("App\Models\Course");
    }

    public function batch_students(){
        return $this->hasMany("App\Models\BatchStudent");
    }

    public function student_course_documents(){
        return $this->hasMany("App\Models\StudentCourseDocument");
    }

    public function fee_receipts(){
        return $this->hasMany("App\Models\FeeReceipt");
    }

    public function exam_results(){
        return $this->hasMany("App\Models\ExamResult");
    }

    public function session_attendances(){
        return $this->hasMany("App\Models\SessionAttendance");
    }

    protected $appends = ['student_data'];

    public function getStudentDataAttribute(){
        return $this->student->fname . " " . $this->student->lname . " - " . $this->course->course;
    }

    
}
