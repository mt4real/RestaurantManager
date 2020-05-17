<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        //menu fake data
        'name'=>$faker->word,
        'description'=>$faker->paragraphs($nb = 3, $asText = true),
        'price'=>$faker->numberBetween(99,999),
    ];
});
