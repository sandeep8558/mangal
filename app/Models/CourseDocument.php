<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'course_id',
        'all_document_id',
    ];
    
}
