<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BooksTableSeeder::class);
       //remove backslashes if I create this seeder//$this->call(UsersTableSeeder::class);
    }
}
