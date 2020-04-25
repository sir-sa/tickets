<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Ticket::class, function (Faker $faker) {
    return [
        'summary' => $faker->sentence,
        'description' => $faker->paragraph,
        'status' => $faker->word,
    ];
});
