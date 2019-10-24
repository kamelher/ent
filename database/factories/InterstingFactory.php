<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Intersting;
use Faker\Generator as Faker;

$factory->define(Intersting::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'user_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
