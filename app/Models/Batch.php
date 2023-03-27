<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ClassroomSlot;

class Batch extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'classroom_type',
        'classroom_id',
        'batch_name',
        'effective_from',
        'effective_till',
        'sessions',
        'batch_type',
        'mon_slots',
        'tue_slots',
        'wed_slots',
        'thu_slots',
        'fri_slots',
        'sat_slots',
        'sun_slots',
        'status',
        'syllabus',
        'markentry',
    ];

    public function branch(){
        return $this->belongsTo("App\Models\Branch");
    }

    public function classroom(){
        return $this->belongsTo("App\Models\Classroom");
    }

    public function batch_courses(){
        return $this->hasMany("App\Models\BatchCourse");
    }

    public function batch_faculties(){
        return $this->hasMany("App\Models\BatchFaculty");
    }
    
    public function batch_sessions(){
        return $this->hasMany("App\Models\BatchSession");
    }

    public function batch_students(){
        return $this->hasMany("App\Models\BatchStudent");
    }

    protected $appends = ['sun_time','mon_time','tue_time','wed_time','thu_time','fri_time','sat_time'];

    public function getSunTimeAttribute(){
        return $this->getClassTime($this->sun_slots);
    }

    public function getMonTimeAttribute(){
        return $this->getClassTime($this->mon_slots);
    }

    public function getTueTimeAttribute(){
        return $this->getClassTime($this->mon_slots);
    }

    public function getWedTimeAttribute(){
        return $this->getClassTime($this->mon_slots);
    }

    public function getThuTimeAttribute(){
        return $this->getClassTime($this->mon_slots);
    }

    public function getFriTimeAttribute(){
        return $this->getClassTime($this->mon_slots);
    }

    public function getSatTimeAttribute(){
        return $this->getClassTime($this->mon_slots);
    }

    public function getClassTime($slts){
        if($slts != null || $slts != ''){
            $slots = explode( ",",$slts);
            $first = reset($slots);
            $last = end($slots);
            $f = ClassroomSlot::find($first);
            $l = ClassroomSlot::find($first);
            return $f->from . "-" . $l->to;
        } else {
            return "No Lecture";
        }
    }
}
