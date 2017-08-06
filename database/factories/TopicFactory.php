<?php

use Faker\Generator as Faker;

$factory->define(App\Topic::class, function (Faker $faker) {
    return [
        'title'   => $title = $faker->sentence(10),
        'slug'    => str_slug($title),
        'user_id' => 1,
    ];
});
