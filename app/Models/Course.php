<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'title',
        'description',
        'length',
        'repository_url',
    ];

    // public function gerRouteKeyName()
    // {
    //     return 'slug';
    // }

    /**
     * Get all of the lessons for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }


    /**
     * Get the firstLesson associated with the Lesson
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function firstLesson(): HasOne
    {
        // return $this->hasOne(Lesson::class)->ofMany('number', 'min');
        return $this->lessons()->one()->ofMany('number', 'min');
    }

    protected function routeUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => route('courses.show', $this)
        );
    }
}
