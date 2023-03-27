<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'staff_id',
        'batch_id',
        'classroom_id',
        'slots',
        'dt',
        'topic_covered',
        'description',
        'validated_id',
    ];

    public function batch(){
        return $this->belongsTo("App\Models\Batch");
    }

    public function staff(){
        return $this->belongsTo("App\Models\Staff");
    }

    public function classroom(){
        return $this->belongsTo("App\Models\Classroom");
    }

    public function validator(){
        return $this->belongsTo("App\Models\Staff", "validated_id");
    }

    public function session_attendances(){
        return $this->hasMany("App\Models\SessionAttendance");
    }
    
}
