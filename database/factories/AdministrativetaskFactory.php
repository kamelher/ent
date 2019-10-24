<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Administrativetask;
use Faker\Generator as Faker;

$factory->define(Administrativetask::class, function (Faker $faker) {

    return [
        'user_id' => $faker->word,
        'posttype_id' => $faker->randomDigitNotNull,
        'startDate' => $faker->date('Y-m-d H:i:s'),
        'endDate' => $faker->date('Y-m-d H:i:s'),
        'path' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
