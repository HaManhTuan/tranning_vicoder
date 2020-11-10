<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    $firstName = $faker->firstName;
    $lastName  = $faker->lastName;
    return [
        'email'      => $faker->safeEmail,
        'full_name'  => $firstName . ' ' . $lastName,
        'first_name' => $firstName,
        'last_name'  => $lastName,
        'address'    => $faker->address,
        'phone_number'    => $faker->phone_number,
        'fax'    => $faker->fax,
        'phone_ct'    => $faker->phone_ct,
    ];
});
