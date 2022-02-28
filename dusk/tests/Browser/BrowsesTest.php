<?php

namespace Konsulting\DuskStandalone;

use Laravel\Dusk\Browser;
use Konsulting\DuskStandalone\Tests\DuskTestCase;

class BrowsesTest extends DuskTestCase
{
    /**
     * @test
     * Test if we can fill out a username and post it
     */
    public function can_create_user()
    {
        $this->browse(function (Browser $browser) {
            // Go to the home page
            $browser->visit('/')->assertSee('Example page');

            // Redirect to the /create page
            $browser->click('#create-btn')->assertSee('Creating...');

            // Fill out the username in the input
            $browser->typeSlowly('username', 'test username');

            // Click on the submit button
            $browser->press('send');

            // Test if the submitted username is in the header
            $browser->assertSee('Created username: test username');

            // Redirect back to the home screen
            $browser->click('#back-btn')->assertSee('Example page');
        });
    }

    /**
     * 
     * Test if the example2 page can use the counter buttons
     */
    public function can_use_count_btns()
    {
        $this->browse(function (Browser $browser) {
            // Go to the page
            $browser->visit('/')->assertSee('Example page 2');
            $browser->assertSee('Current count: 0');

            // Increase count

            // Test count

            // Decrease count

            // Test count
        });
    }
}
