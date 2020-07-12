<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName(),
        'lastName' => $faker->lastName(),
        'popularName' => $faker->name(),
        'birth' => $faker->dateTime(),
        'death' => $faker->dateTime(),
        'gender' => $faker->randomElement(['f', 'm', 'o']),
        'image' => $faker->word(),
        'biography' => $faker->text(),
    ];
});
