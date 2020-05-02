<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Website;

class UserWebsiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
    $user = User::where('email', '=', 'jamal@harvard.edu')->first();

    $websites = [
        'Harvard Health Publishing Coronavirus Resource Center',
        'Health Affairs COVID-19'
    ];

    foreach ($websites as $name) {
        $website = Website::where('name', '=', $name)->first();
        $user->websites()->save($website, ['my_review' => 'I found the following website very informative on COVID-19.']);
    }
    
}
}