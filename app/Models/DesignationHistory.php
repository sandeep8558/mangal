<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignationHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'designation_id',
        'effective_from',
        'effective_till',
        'remark',
    ];

    public function staff(){
        return $this->belongsTo("App\Models\Staff");
    }

    public function designation(){
        return $this->belongsTo("App\Models\Designation");
    }
    
}
