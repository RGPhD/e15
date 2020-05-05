<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PageTest extends DuskTestCase
{
    /* My Page Dusk tests.
     * @return void
     */
    public function testHomepage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Coronavirus Websites');

            $browser->click('#image');
        });
    }

    public function testHomepageforGuest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('We are Coronavirus Websites');

            $browser->assertVisible('#image');
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

}
