<?php

namespace App\Repositories\Eloquent\Criteria;

use App\Repositories\Criteria\CriterionInterface;

class IsLive implements CriterionInterface
{
    /**
     * implement criteria.
     *
     * @param $entity
     *
     * @return \Illuminate\Support\Collection
     */
    public function apply($entity)
    {
        return $entity->where('live', true);
    }
}
