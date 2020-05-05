<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;

class AuthTest extends DuskTestCase
{
    /* Dusk tests
     * @return void
     */
    public function testRegistration()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register');
        });
    }

    public function testFailedRegistration()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
            ->type('name', 'Jill Harvard')
                    ->type('email', 'jill@harvard.edu')
                    ->type('password', 'helloworld')
                    ->type('password_confirmation', 'helloworld')
                    ->click('@register-button')
                    ->assertSee('The email has already been taken.');
        });
    }
}