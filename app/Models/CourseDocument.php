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

    public function category(){
        return $this->belongsTo("App\Models\CourseCategory", 'category_id');
    }

    public function course(){
        return $this->belongsTo("App\Models\Course");
    }

    public function document(){
        return $this->belongsTo("App\Models\AllDocument", 'all_document_id');
    }
    
}
