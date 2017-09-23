<?php

namespace App\Traits\Eloquent;

use Illuminate\Database\Eloquent\Builder;

trait HasLive
{
    /**
     * Scope for live param.
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     *
     * @return bool
     */
    public function scopeLive(Builder $builder)
    {
        return $builder->live();
    }
}
