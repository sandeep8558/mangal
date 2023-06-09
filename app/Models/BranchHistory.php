<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'branch_id',
        'effective_from',
        'effective_till',
        'remark',
    ];

    public function staff(){
        return $this->belongsTo("App\Models\Staff");
    }

    public function branch(){
        return $this->belongsTo("App\Models\Branch");
    }
    
}
