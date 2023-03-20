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
    
}
