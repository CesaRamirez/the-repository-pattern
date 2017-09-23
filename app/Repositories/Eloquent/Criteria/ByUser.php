<?php

namespace App\Repositories\Eloquent\Criteria;

use App\Repositories\Criteria\CriterionInterface;

class ByUser implements CriterionInterface
{
    /**
     * userId variable.
     *
     * @var int
     */
    protected $userId;

    /**
     * Constructor By user.
     *
     * @param int $userId
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
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
        return $entity->where('user_id', $this->userId);
    }
}
