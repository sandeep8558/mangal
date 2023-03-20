<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'display',
        'salary_group_name',
        'description',
        'payment_type',
        'working_minutes_per_day',
        'salary_amount',
        'basic',
        'houserent',
        'dearness',
        'conveyance',
        'travelling',
        'employee_pf',
        'employer_pf',
        'professional_tax',
        'esic',
        'otperhr',
        'bonus',
    ];
    
}
