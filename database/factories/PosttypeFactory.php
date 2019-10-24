<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Posttype;
use Faker\Generator as Faker;

$factory->define(Posttype::class, function (Faker $faker) {

    return [
        'postname' => $faker->word,
        'postDescription' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
