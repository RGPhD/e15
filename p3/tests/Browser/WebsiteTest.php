<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Website;
use App\User;

class WebsiteTest extends DuskTestCase
{
    public function testAllWebsites()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/websites')
                    ->assertSee('All of Our Recommended Websites');
            $browser->click('#websites');
        });
    }

    public function testWebsiteCategory()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/websites/category')
                    ->assertSee('Websites by Category');

            $browser->assertSee('Website Category: Financial');

            $browser->click('#websites');
        });
    }  
}