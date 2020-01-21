<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Home::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(255),
        'user_id'=> rand(1, 11),
    ];
});
