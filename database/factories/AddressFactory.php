<?php

use Faker\Generator as Faker;

$factory->define(App\Address::class, function (Faker $faker) {
    return [
        'line1'   => $faker->address,
        'user_id' => 1,
    ];
});
