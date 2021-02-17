<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Hash;

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
                    ->assertPathIs('/dashboard')
                    ->clickLink('Logout')
                    ->assertPathIs('/');
        });
    }

     /** @test */
     public function a_user_can_login_correctly()
     {
        User::create([
              'name' => 'Rudys Acosta',
              'email' => 'rudys@gmail.com',
              'password' => Hash::make('password12345'),
        ]);
        
         $this->browse(function (Browser $browser) {
             $browser->visit('/')
                     ->clickLink('Login')
                     ->type('email', 'rudys@gmail.com')
                     ->type('password', 'password12345')
                     ->press('button[type="submit"]')
                     ->assertPathIs('/dashboard');
         });
     }
}
