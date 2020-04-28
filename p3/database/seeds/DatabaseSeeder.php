<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Website;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed p3 application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(WebsitesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserWebsiteTableSeeder::class);
    }
}
