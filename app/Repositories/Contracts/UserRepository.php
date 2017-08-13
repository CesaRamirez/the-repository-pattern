<?php

namespace App\Repositories\Contracts;

interface UserRepository
{
    public function all();

    public function createAddress($userId, array $properties);

    public function deleteAddress($userId, $AddressId);
}
