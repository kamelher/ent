<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {

    return [
        'Title' => $faker->word,
        'suppervisingYear' => $faker->randomDigitNotNull,
        'link' => $faker->word,
        'firststudent' => $faker->word,
        'secondstudent' => $faker->word,
        'thirdstudent' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'typeencarement_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
