<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{

    use DatabaseMigrations;

    /** @test */
    public function a_user_can_register_correctly()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->type('name', 'Rudys Acosta')
                    ->type('email', 'rudys@gmail.com')
                    ->type('password', 'password12345')
                    ->type('password_confirmation', 'password12345')
                    ->press('button[type="submit"]')
                    ->assertPathIs('/dashboard');
        });
    }
}
