<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\brand;
use App\Model;
use Faker\Generator as Faker;

$factory->define(brand::class, function (Faker $faker) {
    return [
        'b_name'=>$faker->firstName(),
        'status'=>$faker->name(5),
        'date'=>$faker->date(),
    ];
});
