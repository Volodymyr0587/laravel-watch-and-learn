<?php

namespace App\Models;

use App\Traits\Routable;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory, Routable;

    protected $table = 'courses';

    protected $fillable = [
        'title',
        'description',
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

    protected function formattedLength(): Attribute
    {
        return Attribute::make(
            get: function () {
                $interval = CarbonInterval::seconds($this->lessons()->sum('length'))
                    ->cascade()
                    ->toArray();

                $formattedDays = $interval['days'] ? "{$interval['days']}d" : '';
                $formattedHours = $interval['hours'] ? "{$interval['hours']}h" : '';
                $formattedMinutes = $interval['minutes'] ? "{$interval['minutes']}m" : '';
                $formattedSeconds = $interval['seconds'] ? "{$interval['seconds']}s" : '';

                return trim("$formattedDays $formattedHours $formattedMinutes $formattedSeconds");
            }
        );
    }
}
