<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'salary_group_id',
        'effective_from',
        'effective_till',
        'remark',
    ];

    public function staff(){
        return $this->belongsTo("App\Models\Staff");
    }

    public function salary_group(){
        return $this->belongsTo("App\Models\SalaryGroup");
    }
    
}
