<?php

namespace Hesto\LaravelScheduler\Traits;

use Hesto\LaravelScheduler\Models\CalendarEvents;

trait Eventable
{
    public function events()
    {
        return $this->morphMany(CalendarEvents::class, 'eventable');
    }
}
