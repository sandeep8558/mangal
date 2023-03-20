<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'location_name',
        'address',
        'city',
        'pincode',
        'state',
        'country',
        'contact_number',
        'email',
    ];
    
}
