<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Register\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'fullname' => $faker->name,
        'rg' => '303030303030',
        'address' => $faker->streetName,
        'address_number' => $faker->buildingNumber,
        'address_complement' => $faker->secondaryAddress,
        'district' => 'district',
        'zip_code' => $faker->postcode,
        'state' => $faker->state,
        'city' => $faker->city,
        'bloody_type' => 'B',
        'emergency_number' => $faker->phoneNumber,
        'emergency_name' => $faker->name,
        'picture_file_name' => 'sdfsdfsdf',
        'phone' => $faker->phoneNumber,
        'membership_year' => $faker->year(),
        'cbm' => $faker->boolean,
        'cbm_where' => $faker->randomElement(['CAP', 'GPM', 'CEU', 'AGUIPERJ']),
        'birth_date' => $faker->date('Y-m-d', 'now'),
        'medical_assurence' => $faker->randomElement(['Amil', 'Prevent Senior', 'Porto Seguro']),
    ];
});
