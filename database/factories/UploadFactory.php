<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Upload;
use Faker\Generator as Faker;

$factory->define(Upload::class, function (Faker $faker) {

    return [
        'path' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
