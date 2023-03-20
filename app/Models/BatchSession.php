<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'staff_id',
        'batch_id',
        'classroom_id',
        'slots',
        'dt',
        'topic_covered',
        'description',
        'validated_id',
    ];
    
}
