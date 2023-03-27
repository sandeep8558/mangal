<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_id',
        'category_id',
        'course_id',
    ];

    public function batch(){
        return $this->belongsTo("App\Models\Batch");
    }

    public function category(){
        return $this->belongsTo("App\Models\CourseCategory", "category_id");
    }

    public function course(){
        return $this->belongsTo("App\Models\Course");
    }
    
}
