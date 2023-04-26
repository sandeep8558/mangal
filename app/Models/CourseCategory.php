<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'display',
        'typeof',
        'order',
        'category',
        'description',
        'media',
    ];

    public function courses(){
        return $this->hasMany("App\Models\Course", "category_id");
    }
}
