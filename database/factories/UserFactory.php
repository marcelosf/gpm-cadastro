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
        'address' => $faker->address,
        'address_number' => 5,
        'address_complement' => 'Complement',
        'district' => 'district',
        'zip_code' => '908098123',
        'state' => 'state',
        'city' => 'city',
        'bloody_type' => 'B',
        'emergency_number' => '324234234',
        'emergency_name' => $faker->name,
        'picture_file_name' => 'sdfsdfsdf'
    ];
});
