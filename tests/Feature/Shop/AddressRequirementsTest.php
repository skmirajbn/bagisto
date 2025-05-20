<?php

namespace Tests\Feature\Shop;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Webkul\Core\Facades\Core;
use Webkul\Customer\Models\Customer;
use Webkul\Sales\Models\Order;
use Webkul\Sales\Models\OrderAddress;
use Illuminate\Support\Facades\Config;

class AddressRequirementsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if the isEmailRequired method works correctly
     *
     * @return void
     */
    public function testIsEmailRequired()
    {
        // Test when config is set to true
        Config::set('app.customer.address.requirements.email', true);
        $this->assertTrue(Core::isEmailRequired());

        // Test when config is set to false
        Config::set('app.customer.address.requirements.email', false);
        $this->assertFalse(Core::isEmailRequired());
    }

    /**
     * Test if the isCountryRequired method works correctly
     *
     * @return void
     */
    public function testIsCountryRequired()
    {
        // Test when config is set to true
        Config::set('app.customer.address.requirements.country', true);
        $this->assertTrue(Core::isCountryRequired());

        // Test when config is set to false
        Config::set('app.customer.address.requirements.country', false);
        $this->assertFalse(Core::isCountryRequired());
    }

    /**
     * Test if the isStateRequired method works correctly
     *
     * @return void
     */
    public function testIsStateRequired()
    {
        // Test when config is set to true
        Config::set('app.customer.address.requirements.state', true);
        $this->assertTrue(Core::isStateRequired());

        // Test when config is set to false
        Config::set('app.customer.address.requirements.state', false);
        $this->assertFalse(Core::isStateRequired());
    }
}
