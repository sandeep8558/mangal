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
    
}
