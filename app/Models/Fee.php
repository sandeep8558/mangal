<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'course_id',
        'effective_from',
        'effective_till',
        'fees_amount',
        'remark',
    ];

    public function category(){
        return $this->belongsTo("App\Models\CourseCategory", "category_id");
    }

    public function course(){
        return $this->belongsTo("App\Models\Course");
    }
    
}
