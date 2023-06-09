<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentQualification extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'particular',
        'year',
        'university',
        'grade',
        'remark',
    ];

    public function student(){
        return $this->belongsTo("App\Models\Student");
    }
    
}
