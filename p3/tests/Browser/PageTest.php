<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PageTest extends DuskTestCase
{
    /* My Page Dusk tests; total dusk tests passed 16, with 29 assertions
     */
    public function testHomepage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Coronavirus Websites');

            $browser->click('@login');
        });
    }

    public function testHomepageforGuest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('We are Coronavirus Websites');

            $browser->assertVisible('@login');
            $browser->click('@login');
              
        });
    }

    public function testContactPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                    ->assertSee('Contact Coronavirus Websites');
        });
    }

    public function testLoginPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Member Login');
        });
    }

}
