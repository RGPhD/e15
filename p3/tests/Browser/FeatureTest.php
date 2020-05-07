<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /* My Basic browser tests
     * @return void
     */
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
                    ->assertSee('Websites by Category');

        });
    }
}
