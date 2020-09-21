<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\{Loan, User, Stock};
use Faker\Generator as Faker;

$factory->define(Loan::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'stock_id' => Stock::all()->random()->id,
        'loan_start' => $faker->date(),
        'loan_end' => $faker->date(),
    ];
});
