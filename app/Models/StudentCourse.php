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
        'actual_fees_amount',
        'discount',
        'fees_amount',
        'admission_at',
        'effective_from',
        'effective_till',
    ];

    public function student(){
        return $this->belongsTo("App\Models\Student");
    }

    public function category(){
        return $this->belongsTo("App\Models\CourseCategory", 'category_id');
    }

    public function course(){
        return $this->belongsTo("App\Models\Course");
    }
    
}
