<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'document_title',
        'review',
        'media',
    ];

    public function staff(){
        return $this->belongsTo("App\Models\Staff");
    }
    
}
