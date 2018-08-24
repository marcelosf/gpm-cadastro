<?php

use Faker\Generator as Faker;
use Register\Entities\Register;

$factory->define(Register::class, function (Faker $faker) {
    return [
        
        'rg' => $faker->randomNumber(4),
        'cpf' => $faker->randomNumber(8),
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
        'picture' => $faker->imageUrl(100, 120),
        'phone' => $faker->phoneNumber,
        'membership_year' => $faker->year(),
        'membership_number' => $faker->randomNumber(4),
        'cbm' => $faker->boolean,
        'cbm_where' => $faker->randomElement(['CAP', 'GPM', 'CEU', 'AGUIPERJ']),
        'birth_date' => $faker->date('Y-m-d', 'now'),
        'medical_assurence' => $faker->randomElement(['Amil', 'Prevent Senior', 'Porto Seguro'])

    ];
});
