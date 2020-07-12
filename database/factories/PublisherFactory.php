<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Publisher;
use Faker\Generator as Faker;


$factory->define(Publisher::class, function (Faker $faker) {
    return [
        'publisher' => $faker->word(),
        'logo' => 'https://source.unsplash.com/random',
    ];
});
