<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamBatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'examination_id',
        'batch_id',
    ];

    public function examination(){
        return $this->belongsTo("App\Models\Examination");
    }

    public function batch(){
        return $this->belongsTo("App\Models\Batch");
    }
    
}
