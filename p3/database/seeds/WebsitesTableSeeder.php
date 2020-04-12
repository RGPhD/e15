<?php

use Illuminate\Database\Seeder;
use App\Website;

class WebsitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add my rows data
        # Add a individual website
    $website = new Website();
    $website->name = 'Health Affairs COVID-19';
    $website->website_url = 'https://www.healthaffairs.org/covid-19-coronavirus-disease';
    $website->category = 'Health';
    $website->slug = 'health-affairs';
    $website->organization = 'Health Affairs';
    $website->website_image = 'https://www.healthaffairs.org/pb-assets/images/hubs/covid-19/COVID19_feature_image-1586455267470.png';
    $website->summary = 'A collection of COVID-19 (Coronavirus Disease) content from Health Affairs journal articles and additional resources provides timely commentary, expert analysis, and policy proposals.';
    $website->save();

      # Or, pull in the data from a websites.json file to add a bunch of websites
    }
}
