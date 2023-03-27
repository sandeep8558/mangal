<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchFaculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_id',
        'staff_id',
    ];

    public function batch(){
        return $this->belongsTo("App\Models\Batch");
    }

    public function open_batch(){
        return $this->batch()->where("status", "On Going");
    }

    public function closed_batch(){
        return  $this->batch()->where("status", "Closed");
    }

    public function staff(){
        return $this->belongsTo("App\Models\Staff");
    }
    
}
