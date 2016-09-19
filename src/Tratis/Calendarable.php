<?php

namespace Hesto\LaravelScheduler\Traits;

use Hesto\LaravelScheduler\Models\Calendar;

trait Calendarable
{
    public function calendar()
    {
        return $this->morphOne(Calendar::class, 'calendarable');
    }
}
