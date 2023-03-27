<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'name',
        'description',
    ];

    public function course_instruments(){
        return $this->hasMany("App\Models\CourseInstrument");
    }
}
