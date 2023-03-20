<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'gender',
        'dob',
        'fathersname',
        'mothersname',
        'address',
        'city',
        'pincode',
        'state',
        'country',
        'permanent_address',
        'permanent_city',
        'permanent_pincode',
        'permanent_state',
        'permanent_country',
        'email',
        'contact_number',
        'parents_number',
        'instagram_id',
        'facebook_id',
    ];

    public function student_courses(){
        return $this->hasMany("App\Models\StudentCourse");
    }
    
}
