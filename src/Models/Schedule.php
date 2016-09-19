<?php

namespace Hesto\LaravelScheduler\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'scheduleable_id', 'scheduleable_type', 'name', 'available_from', 'available_to'
    ];

    public function schedulealbe()
    {
        return $this->morphTo();
    }
}
