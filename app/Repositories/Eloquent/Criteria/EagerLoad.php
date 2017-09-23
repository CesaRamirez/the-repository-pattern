<?php

namespace App\Repositories\Eloquent\Criteria;

use App\Repositories\Criteria\CriterionInterface;

class EagerLoad implements CriterionInterface
{
    /**
     * relations variable.
     *
     * @var array
     */
    protected $relations;

    /**
     * Constructor eager load.
     *
     * @param array relations
     */
    public function __construct(array $relations)
    {
        $this->relations = $relations;
    }

    /**
     * implement criteria.
     *
     * @param $entity
     *
     * @return \Illuminate\Support\Collection
     */
    public function apply($entity)
    {
        return $entity->with($this->relations);
    }
}
