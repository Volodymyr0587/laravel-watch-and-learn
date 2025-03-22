<?php

namespace App\Models;

use App\Traits\Routable;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory, Routable;

    protected $fillable = [
        'course_id',
        'number',
        'title',
        'length',
        'url',
        'commit_url',
    ];

    /**
     * Get the course that owns the Lesson
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    protected function previous(): Attribute
    {
        return Attribute::make(
            get: fn () => $this
                ->course
                ->lessons()
                ->firstWhere('number', $this->number - 1),
        );
    }

    protected function next(): Attribute
    {
        return Attribute::make(
            get: fn () => $this
                ->course
                ->lessons()
                ->firstWhere('number', $this->number + 1),
        );
    }

    protected function formattedLength(): Attribute
    {
        return Attribute::make(
            get: function () {
                $interval = CarbonInterval::seconds($this->length)
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
