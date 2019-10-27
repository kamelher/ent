<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Adress;
use Faker\Generator as Faker;

$factory->define(Adress::class, function (Faker $faker) {

    return [
        'user_id' => $faker->word,
        'adress' => $faker->text,
        'commune' => $faker->word,
        'daira' => $faker->word,
        'wilaya' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
