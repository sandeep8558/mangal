<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'particular',
        'narration',
        'supplier',
        'amount',
        'dt',
        'expiry',
    ];

    public function branch(){
        return $this->belongsTo("App\Models\Branch");
    }
    
}
