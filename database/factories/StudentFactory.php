<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Student;
use Illuminate\Support\Str;

$factory->define(Student::class, function (Faker $faker) {
    $gender = rand(0, 1);
    return [
        'name' => $faker->name($gender),
        'gender' => $gender,
        'birthday' => $faker->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
        'phone_number' => $faker->phoneNumber,
        'university_class_id' => rand(1, 30),
        'email' => $faker->unique()->safeEmail,
    ];
});
