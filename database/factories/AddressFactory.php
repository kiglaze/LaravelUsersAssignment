<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'street_address' => $faker->streetAddress,
        'city' => $faker->city,
        'postcode' => $faker->postcode,
        'region' => $faker->state,
        'country' => $faker->countryCode
    ];
});
