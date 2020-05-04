<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /*
     * A basic browser tests
     * @return void
     */
    public function testBasicHomepageInBrowser()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('We are Coronavirus Websites');
        });
    }
}
