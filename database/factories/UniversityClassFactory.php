<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UniversityClass;
use Faker\Generator as Faker;

$factory->define(UniversityClass::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'academic_year' => $faker->dateTimeBetween('-5 years')->format('Y'),
        //'user_id' => rand(1, 10)
    ];
});
