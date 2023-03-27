<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionAttendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_session_id',
        'student_course_id',
        'status',
    ];

    public function batch_session(){
        return $this->belongsTo("App\Models\BatchSession");
    }

    public function student(){
        return $this->belongsTo("App\Models\Student");
    }
    
}
