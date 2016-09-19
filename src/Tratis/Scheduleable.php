<?php

namespace Hesto\LaravelScheduler\Traits;

use Hesto\LaravelScheduler\Models\Schedule;

trait Scheduleable
{
    public function schedules()
    {
        return $this->morphMany(Schedule::class, 'scheduleable');
    }
}
