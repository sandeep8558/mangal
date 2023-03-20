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
    
}
