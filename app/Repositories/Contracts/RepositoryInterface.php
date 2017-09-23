<?php

namespace App\Repositories\Contracts;

interface RepositoryInterface
{
    /**
     * Get all registers.
     *
     * @return \Illuminate\Support\Collection
     */
    public function all();

    /**
     * Get register by id.
     *
     * @param int $id
     *
     * @return \Illuminate\Support\Collection
     */
    public function find($id);

    /**
     * Get registers.
     *
     * @param string     $column
     * @param int|string $value
     *
     * @return \Illuminate\Support\Collection
     */
    public function findWhere($column, $value);

    /**
     * Get first register.
     *
     * @param string     $column
     * @param int|string $value
     *
     * @return \Illuminate\Support\Collection
     */
    public function findWhereFirst($column, $value);

    /**
     * Paginate registers.
     *
     * @param int $perPage
     *
     * @return \Illuminate\Support\Collection
     */
    public function paginate($perPage = 10);

    /**
     * Create register.
     *
     * @param array $properties
     *
     * @return \Illuminate\Support\Collection
     */
    public function create(array $properties);

    /**
     * Update register.
     *
     * @param int   $id
     * @param array $properties
     *
     * @return \Illuminate\Support\Collection
     */
    public function update($id, array $properties);

    /**
     * Delete register.
     *
     * @param int $id
     *
     * @return \Illuminate\Support\Collection
     */
    public function delete($id);
}
