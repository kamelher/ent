<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ticusage;
use Faker\Generator as Faker;

$factory->define(Ticusage::class, function (Faker $faker) {

    return [
        'Title' => $faker->word,
        'link' => $faker->word,
        'certificatlink' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'tictype_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
