<?php

namespace Hesto\LaravelScheduler\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'calendar_id', 'eventable_id', 'eventable_type', 'name', 'url', 'start_date', 'end_date'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start_date',
        'end_date',
    ];

    public function calendar()
    {
        return $this->belongsTo(Calendar::class);
    }
}
