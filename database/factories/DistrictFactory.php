<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\District;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(District::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->state,
        'district_image' => Str::random(10),
    ];
});
