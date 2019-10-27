<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Formation;
use Faker\Generator as Faker;

$factory->define(Formation::class, function (Faker $faker) {

    return [
        'user_id' => $faker->word,
        'title' => $faker->text,
        'startDate' => $faker->date('Y-m-d H:i:s'),
        'endDate' => $faker->date('Y-m-d H:i:s'),
        'organization' => $faker->text,
        'pfeTitle' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
