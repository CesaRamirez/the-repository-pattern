<?php

namespace App\Repositories;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Criteria\CriteriaInterface;
use App\Repositories\Exceptions\NoEntityDefined;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class RepositoryAbstract implements RepositoryInterface, CriteriaInterface
{
    /**
     * variable entity.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $entity;

    /**
     * Constructor Repository abstract.
     */
    public function __construct()
    {
        $this->entity = $this->resolveEntity();
    }

    /**
     * Filters for better search.
     *
     * @param $criteria
     */
    public function withCriteria(...$criteria)
    {
        $criteria = array_flatten($criteria);

        foreach ($criteria as $criterion) {
            $this->entity = $criterion->apply($this->entity);
        }

        return $this;
    }

    public function all()
    {
        return $this->entity->get();
    }

    public function find($id)
    {
        $model = $this->entity->find($id);

        if (! isset($model)) {
            throw (new ModelNotFoundException())->setModel(
            get_class($this->entity->getModel()), $id
          );
        }

        return $model;
    }

    public function findWhere($column, $value)
    {
        return $this->entity->where($column, $value)->get();
    }

    public function findWhereFirst($column, $value)
    {
        $model =  $this->entity->where($column, $value)->firstOrFail();

        if (! isset($model)) {
            throw (new ModelNotFoundException())->setModel(
            get_class($this->entity->getModel())
          );
        }

        return $model;
    }

    public function paginate($perPage = 10)
    {
        return $this->entity->paginate($perPage);
    }

    public function create(array $properties)
    {
        return $this->entity->create($properties);
    }

    public function update($id, array $properties)
    {
        return $this->entity->find($id)->update($properties);
    }

    public function delete($id)
    {
        return $this->entity->find($id)->delete();
    }

    public function resolveEntity()
    {
        if (! method_exists($this, 'entity')) {
            throw new NoEntityDefined();
        }

        return app()->make($this->entity());
    }
}
