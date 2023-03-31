<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ClassroomSlot;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'display',
        'classroom_name',
        'description',
        'seating_capacity',
        'pc_capacity',
        'slots',
    ];

    public function branch(){
        return $this->belongsTo("App\Models\Branch");
    }

    public function batches(){
        return $this->hasMany("App\Models\Batch");
    }

    public function exam_subjects(){
        return $this->hasMany("App\Models\ExamSubject");
    }

    protected $appends = ['slts'];

    public function getSltsAttribute(){
        $s = explode(",",$this->slots);
        return ClassroomSlot::whereIn("id", $s)->get();
    }
    
}
