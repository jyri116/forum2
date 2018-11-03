<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_if_threads_webpage_exists()
    {
        $response = $this->get('/threads');

        $response->assertStatus(200);
    }
}
