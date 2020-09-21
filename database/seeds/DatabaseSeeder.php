<?php

use Illuminate\Database\Seeder;
use App\Models\{User, Book, Stock, Loan};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,50)->create();
        factory(Book::class,100)->create();
        factory(Stock::class, 150)->create();
        factory(Loan::class,20)->create();


    }
}
