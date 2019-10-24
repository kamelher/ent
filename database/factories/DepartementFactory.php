<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Departement;
use Faker\Generator as Faker;

$factory->define(Departement::class, function (Faker $faker) {

    return [
        'name' => $faker->domainWord(),
        'name_ar' => $faker->domainWord(),
        'faculty_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
