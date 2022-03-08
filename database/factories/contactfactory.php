<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\contact;
use App\Model;
use Faker\Generator as Faker;

$factory->define(contact::class, function (Faker $faker) {
    return [
'name'=>$faker->name(),
'email'=>$faker->email,
'mobileno'=>$faker->phoneNumber,
'subject'=>$faker->streetName,
    ];
});
