<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEducation extends Model
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
    
}
