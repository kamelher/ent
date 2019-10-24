<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {

    return [
        'firstname' => $faker->word,
        'lastname' => $faker->word,
        'email' => $faker->word,
        'birthdate' => $faker->date('Y-m-d H:i:s'),
        'placeOfbirth' => $faker->word,
        'wilaya' => $faker->word,
        'phone' => $faker->word,
        'googleID' => $faker->word,
        'email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'password' => $faker->word,
        'remember_token' => $faker->word,
        'Photo' => $faker->word,
        'departement_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
