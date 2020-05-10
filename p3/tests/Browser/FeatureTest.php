<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /* My Basic browser and feature tests */
    public function testBasicHomepageInBrowser()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('We are Coronavirus Websites');
        });
    }

    public function testWebsitesFeauture()
    {
        $response = $this->get('/websites');

        $response->assertStatus(200);
    }

    public function testWebsitesCategoryFeauture()
    {
        $response = $this->get('websites/category');

        $response->assertStatus(200);
    }

    public function testMemberLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Member Login');
        });
    }

    public function testCategoryFeature()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/websites/category')
                    ->assertSee('Websites by Category')
                    ->assertSee('CDC COVID-19')
                    ->assertSee('Coronavirus Tax Relief and Economic Impact Payments')
                    ->assertSee('Harvard Health Publishing Coronavirus Resource Center')
                    ->assertSee('Health Affairs COVID-19')
                    ->assertSee('Protecting your Finances during the Coronavirus Pandemic')
                    ->assertSee('World Health Organization Coronavirus');

        });
    }

    public function testAllWebsitesFeature()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/websites')
                    ->assertSee('CDC COVID-19')
                    ->assertSee('Coronavirus Tax Relief and Economic Impact Payments')
                    ->assertSee('Harvard Health Publishing Coronavirus Resource Center')
                    ->assertSee('Health Affairs COVID-19')
                    ->assertSee('Protecting your Finances during the Coronavirus Pandemic')
                    ->assertSee('World Health Organization Coronavirus');   
        });
    }
}
