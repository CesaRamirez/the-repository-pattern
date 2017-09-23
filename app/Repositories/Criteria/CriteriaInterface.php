<?php

namespace App\Repositories\Criteria;

interface CriteriaInterface
{
    /**
     * Filters for better search.
     *
     * @param $criteria
     */
    public function withCriteria(...$criteria);
}
