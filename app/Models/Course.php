<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'title',
        'description',
        'lessons_count',
        'length',
    ];

    // public function gerRouteKeyName()
    // {
    //     return 'slug';
    // }
}
