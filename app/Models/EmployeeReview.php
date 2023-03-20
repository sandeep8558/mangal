<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'review_title',
        'review_date',
        'review_remark',
        'impression',
    ];
    
}
