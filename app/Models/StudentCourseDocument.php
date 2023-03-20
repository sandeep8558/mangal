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
}
