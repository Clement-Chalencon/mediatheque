<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'isbn' => $faker->numerify('##############'),
        'price' => mt_rand(100, 1000) / 10.0,
        'weight' => mt_rand(1, 4) / 1.8,
        'image' => strval(mt_rand(1, 5)) . '.jpg',
        'description' => $faker->paragraph(),
    ];
});
