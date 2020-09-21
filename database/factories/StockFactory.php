<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\{Stock, Book};
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {
    return [
        'department' => 'informatique',
        'book_id' => Book::all()->random()->id,

    ];
});
