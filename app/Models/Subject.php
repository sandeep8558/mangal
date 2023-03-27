<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'course_id',
        'status',
        'subject',
        'description',
    ];

    public function category(){
        return $this->belongsTo("App\Models\CourseCategory", "category_id");
    }

    public function course(){
        return $this->belongsTo("App\Models\Course");
    }
    
}
