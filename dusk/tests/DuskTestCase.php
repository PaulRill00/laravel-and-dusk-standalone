<?php

namespace Konsulting\DuskStandalone\Tests;

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
}
