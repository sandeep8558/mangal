<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMaterialPurchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_instrument_id',
        'dt',
        'amount',
        'qty',
        'narration',
    ];

    public function course_instrument(){
        return $this->belongsTo("App\Models\CourseInstrument");
    }
}
