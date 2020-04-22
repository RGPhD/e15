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
        $website->name = 'World Health Organization Coronavirus';
        $website->website_url = 'https://www.who.int/health-topics/coronavirus';
        $website->category = 'Health';
        $website->slug = 'world-health-organization';
        $website->organization = 'WHO';
        $website->website_image = 'https://www.who.int/ResourcePackages/WHO/assets/dist/images/logos/en/h-logo-blue.svg';
        $website->summary = "The World Health Organization’s official website covering all health related information on the Coronavirus disease (COVID-19) outbreak.  The site includes up to date coverage of the Overview, Prevention, and Symptoms of COVID-19.";
        $website->save();
    
        $website = new Website();
        $website->name = 'Harvard Health Publishing Coronavirus Resource Center';
        $website->website_url = 'https://www.health.harvard.edu/diseases-and-conditions/coronavirus-resource-center';
        $website->category = 'Health';
        $website->slug = 'harvard-health';
        $website->organization = 'Harvard Medical School: Harvard Health Publishing';
        $website->website_image = 'https://www.health.harvard.edu/images/logo-harvard_health-full-v2-@2x.png';
        $website->summary = "Harvard Medical School: Harvard Health Publishing’s answers to common questions all of us are asking about the coronavirus. New questions and updated answers with reliable information featuring experts discussing coronavirus and COVID-19.";
        $website->save();

    $website = new Website();
    $website->name = 'Health Affairs COVID-19';
    $website->website_url = 'https://www.healthaffairs.org/covid-19-coronavirus-disease';
    $website->category = 'Health';
    $website->slug = 'health-affairs';
    $website->organization = 'Health Affairs';
    $website->website_image = 'https://www.healthaffairs.org/pb-assets/images/hubs/covid-19/COVID19_feature_image-1586455267470.png';
    $website->summary = 'A collection of COVID-19 (Coronavirus Disease) content from Health Affairs journal articles and additional resources provides timely commentary, expert analysis, and policy proposals.';
    $website->save();

    $website = new Website();
    $website->name = 'CDC COVID-19';
    $website->website_url = 'https://www.cdc.gov/coronavirus/2019-ncov/index.html';
    $website->category = 'Health';
    $website->slug = 'cdc-coronavirus';
    $website->organization = 'CDC';
    $website->website_image = 'https://www.cdc.gov/homepage/images/cdc-in-action/COVID-19-Response-647x381px.jpg';
    $website->summary = "The Centers for Disease Control and Prevention's COVID-19 UPDATES.";
    $website->review = "Centers for Disease Control and Prevention's COVID-19 UPDATES website provides up to date coverage of the Overview, Prevention, and Symptoms of COVID-19.";
    $website->save();

    $website = new Website();
    $website->name = 'Protecting your Finances during the Coronavirus Pandemic';
    $website->website_url = 'https://www.consumerfinance.gov/coronavirus';
    $website->category = 'Financial';
    $website->slug = 'consumer-finance';
    $website->organization = 'Consumer Financial Protection Bureau';
    $website->website_image = 'https://www.consumerfinance.gov/static/img/logo_237x50.c7c2ba6c929f.png';
    $website->summary = 'An official website of the United States government committed to providing consumers with up-to-date information and resources to protect and manage their finances during this difficult time as the coronavirus situation evolves.';
    $website->save();

    $website = new Website();
    $website->name = 'Coronavirus Tax Relief and Economic Impact Payments';
    $website->website_url = 'https://www.irs.gov/coronavirus-tax-relief-and-economic-impact-payments';
    $website->category = 'Financial';
    $website->slug = 'coronavirus-tax-relief';
    $website->organization = 'IRS';
    $website->website_image = 'https://www.irs.gov/themes/custom/pup_base/images/irs_horiz-01.svg';
    $website->summary = 'An official website of the United States government explaining IRS tax help for taxpayers, businesses, tax-exempt organizations and others – including health plans – affected by coronavirus (COVID-19).';
    $website->save();

      # enter more websites
      # Or, pull in the data from a websites.json file to add a bunch of websites
    }
}
