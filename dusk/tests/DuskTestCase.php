<?php

namespace Konsulting\DuskStandalone\Tests;

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Konsulting\DuskStandalone\TestCase;

class DuskTestCase extends TestCase
{
    protected function baseUrl()
    {
        return 'http://127.0.0.1:8000/';
    }

    protected function browserTestsPath()
    {
        return parent::browserTestsPath();
    }

    protected function user()
    {
        return parent::user();
    }
    

    /**
     * Create the RemoteWebDriver instance.
     *
     * @return \Facebook\WebDriver\Remote\RemoteWebDriver
     */
    protected function driver()
    {
        $options = (new ChromeOptions)->addArguments(collect([
            '--window-size=1920,1080',
        ])->unless($this->hasHeadlessDisabled(), function ($items) {
            return $items->merge([
                '--disable-gpu',
                '--headless',
            ]);
        })->all());

        return RemoteWebDriver::create(
            $_ENV['DUSK_DRIVER_URL'] ?? 'http://localhost:9515',
            DesiredCapabilities::chrome()->setCapability(
                ChromeOptions::CAPABILITY, $options
            )
        );
    }

    protected function hasHeadlessDisabled(): bool
    {
        return true;
    }
}
