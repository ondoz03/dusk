<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('https://account.accurate.id/oauth/authorize?client_id=481371ad-0790-48ef-9c96-12dac9af980e&client_secret=df1eb7e0e3141379ce476fba1b0a228a&response_type=code&redirect_uri=http://dusk.test/aol_back&scope=item_view+item_save+sales_invoice_view')
                ->type('email', 'stagging@rimbahouse.com')
                ->type('password', 'Y5lj%8d7')
                ->press('Login')
                ->press('Beri Akses')
                ->assertPathIs('http://dusk.test/aol_back');
        });
    }
}
