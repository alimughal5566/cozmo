<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->value('#login_username', "admin@admin.com")
                ->value('#login_password', 'test123')
                ->click('SIGN-IN')
                ->visit('/drivers')
                ->assertSee('ADD-NEW')
                ->clickLink('ADD-NEW')
                ->waitForReload()
                ->visit('/drivers/add')
                ->value('#first_name', 'Mak')
                ->value('#last_name', 'Denki')
                ->value('#email', 'mak.den@gmail.com')
                ->value('#first_name', 'Mak')
                ->select('Active', 'Inactive')
                ->select('Active')
                ->select('Driver', 'Security', 'Both')
                ->select('Both')
                ->click('.submit')
                ->pause(3000)
                ->visit('/logout');
        });
    }
}				
									 