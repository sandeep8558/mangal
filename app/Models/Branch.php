<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'location_name',
        'address',
        'city',
        'pincode',
        'state',
        'country',
        'contact_number',
        'email',
    ];

    public function assets(){
        return $this->hasMany("App\Models\Asset");
    }

    public function classrooms(){
        return $this->hasMany("App\Models\Classroom");
    }

    public function activeStaff(){
        return $this->hasMany("App\Models\BranchHistory")->where("effective_till", null);
    }

    public function exStaff(){
        return $this->hasMany("App\Models\BranchHistory")->where("effective_till", "!=", null);
    }

    public function student_courses(){
        return $this->hasMany("App\Models\StudentCourse");
    }

    public function batches(){
        return $this->hasMany("App\Models\Batch");
    }
    
}
