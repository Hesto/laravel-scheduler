<?php

namespace Hesto\LaravelScheduler\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'calendarable_id', 'calendarable_type', 'name',
    ];

    public function calendarable()
    {
        return $this->morphTo();
    }

    public function events()
    {
        return $this->hasMany(CalendarEvent::class);
    }

    public function restrictions()
    {
        return $this->hasMany(CalendarEvents::class);
    }
}
