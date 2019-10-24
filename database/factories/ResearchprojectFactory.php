<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Researchproject;
use Faker\Generator as Faker;

$factory->define(Researchproject::class, function (Faker $faker) {

    return [
        'user_id' => $faker->word,
        'title' => $faker->text,
        'startDate' => $faker->date('Y-m-d H:i:s'),
        'endDate' => $faker->date('Y-m-d H:i:s'),
        'abstract' => $faker->text,
        'role' => $faker->text,
        'path' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
