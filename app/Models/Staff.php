<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_name',
        'dob',
        'joining',
        'exit',
        'gender',
        'blood_group',
        'aadhar',
        'pan',
        'address',
        'city',
        'pincode',
        'state',
        'country',
        'contact_number',
        'email',
        'photo',
    ];

    public function batch_faculties(){
        return $this->hasMany("App\Models\BatchFaculty")->has('open_batch');
    }

    public function batch_sessions(){
        return $this->hasMany("App\Models\BatchSession");
    }

    public function branch_histories(){
        return $this->hasMany("App\Models\BranchHistory");
    }

    public function designation_histories(){
        return $this->hasMany("App\Models\DesignationHistory");
    }

    public function employee_reviews(){
        return $this->hasMany("App\Models\EmployeeReview");
    }

    public function exam_subject_invigilators(){
        return $this->hasMany("App\Models\ExamSubjectInvigilator");
    }

    public function salary_histories(){
        return $this->hasMany("App\Models\SalaryHistory");
    }

    public function staff_documents(){
        return $this->hasMany("App\Models\StaffDocument");
    }
    
}
