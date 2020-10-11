<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(student::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
        'email' =>$faker->email
    ];
});
