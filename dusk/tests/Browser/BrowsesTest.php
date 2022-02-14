<?php

namespace Konsulting\DuskStandalone;

use Laravel\Dusk\Browser;
use Konsulting\DuskStandalone\Tests\DuskTestCase;

class BrowsesTest extends DuskTestCase
{
    /** 
     * @test
     * 
     * Test if a user with username can be created
     */
    public function can_create_user()
    {
        $this->browse(function (Browser $browser) {
            // Go to the home page
            $browser->visit('/')->assertSee('Example page');

            // Redirect to the /create page
            $browser->click('#create-btn')->assertSee('Creating...');

            // Fill out the username in the input
            $browser->type('username', 'test username');

            // Click on the submit button
            $browser->press('send');

            // Test if the submitted username is in the header
            $browser->assertSee('Created username: test username');

            // Redirect back to the home screen
            $browser->click('#back-btn')->assertSee('Example page');
        });
    }
}
