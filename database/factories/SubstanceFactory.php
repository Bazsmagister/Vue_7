<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Substance;
use Faker\Generator as Faker;

$factory->define(Substance::class, function (Faker $faker) {
    return [
        'INN' => $faker->unique()->word,
        'mechanism' => $faker->text,
    ];
});
