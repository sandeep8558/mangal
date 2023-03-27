<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'display',
        'certification',
        'durationtype',
        'duration',
        'order',
        'course',
        'description',
        'media',
    ];

    public function category(){
        return $this->belongsTo("App\Models\CourseCategory", 'category_id');
    }

    public function fee(){
        return $this->hasOne("App\Models\Fee")->latest();
    }

    public function batch_courses(){
        return $this->hasMany("App\Models\BatchCourse");
    }

    public function course_documents(){
        return $this->hasMany("App\Models\CourseDocument");
    }

    public function course_instruments(){
        return $this->hasMany("App\Models\CourseInstrument");
    }

    public function course_sessions(){
        return $this->hasMany("App\Models\CourseSection");
    }

    public function fees(){
        return $this->hasMany("App\Models\Fee");
    }

    public function subjects(){
        return $this->hasMany("App\Models\Subject");
    }
    
}
