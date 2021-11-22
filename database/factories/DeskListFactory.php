<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DeskList;
use Faker\Generator as Faker;

$factory->define(DeskList::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'desk_id' => $faker->numberBetween(1,30)
    ];
});
