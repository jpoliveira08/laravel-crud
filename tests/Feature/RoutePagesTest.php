<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoutePagesTest extends TestCase
{
    /**
     * Test for index page
     *
     * @return void
     */
    public function testIndexPage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test for edit user page
     *
     * @return void
     */
    public function testEditUserPage()
    {
        $response = $this->get('/users/new');

        $response->assertStatus(200);
    }
}
