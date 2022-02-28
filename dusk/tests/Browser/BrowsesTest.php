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
            $browser->visit('/')->assertSee('Demo app');
            sleep(1);

            // Redirect to the /create page
            $browser->click('#start-btn')->assertSee('Create User...');
            sleep(1);

            // Fill out the username in the input
            $browser->typeSlowly('username', 'test username');

            // Click on the submit button
            $browser->press('send');
            sleep(1);

            // Test if the submitted username is in the header
            $browser->assertSee('Created username: test username');
            sleep(1);

            // Redirect back to the home screen
            $browser->click('#back-btn')->assertSee('Demo app');
        });
    }

    /**
     * @test
     * Test if the counter page can use the counter buttons
     */
    public function can_use_count_btns()
    {
        $this->browse(function (Browser $browser) {
            // Go to the page
            $browser->visit('counter')->assertSee('Counter page');
            $browser->assertSee('Current count: 0');

            sleep(1);

            // Increase count

            // Test count

            // Decrease count

            // Test count
        });
    }
}
