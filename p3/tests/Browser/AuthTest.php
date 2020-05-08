<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;

class AuthTest extends DuskTestCase
{

    public function testRegistration()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register');
        });
    }

    public function testSuccesfulLogin()
    {
        $this->browse(function (Browser $browser) {

            $browser->logout()
                    ->visit('/login')
                    ->type('email', 'jill@harvard.edu')
                    ->type('password', 'helloworld')
                    ->assertSee('Login');
        });
    }

}