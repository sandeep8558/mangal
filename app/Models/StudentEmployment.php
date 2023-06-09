<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEmployment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'company',
        'doj',
        'designation',
        'location',
    ];

    public function student(){
        return $this->belongsTo("App\Models\Student");
    }
}
