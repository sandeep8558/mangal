<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInstrument extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'course_id',
        'material_id',
    ];

    public function category(){
        return $this->belongsTo("App\Models\CourseCategory", 'category_id');
    }

    public function course(){
        return $this->belongsTo("App\Models\Course");
    }

    public function material(){
        return $this->belongsTo("App\Models\Material");
    }

    public function course_instrument_purchases(){
        return $this->hasMany("App\Models\CourseMaterialPurchase");
    }
    
}
