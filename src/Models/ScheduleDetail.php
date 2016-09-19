<?php

namespace Hesto\LaravelScheduler\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'schedule_id', 'day', 'start_time', 'end_time'
    ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function setStartTimeAttribute($value)
    {
        return $value;
    }

    public function setEndTimeAttribute($value)
    {
        return $value;
    }

    public function getDuration()
    {
        return $this->start_time->diffInSeconds($this->end_time);
    }
}
