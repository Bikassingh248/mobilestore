<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {
    return [
        'p_id' => $faker->uuid,
       'p_name' =>$faker->domainName,
       'p_brand' =>$faker->company,
//       'image' =>$faker->image('public/factory/images',400,300, null, false) ,
        'image' => $faker->imageUrl(200,400,null,true,null, false),
       'description' => $faker->sentence,
       'price' =>rand(0,10),
    ];
});
