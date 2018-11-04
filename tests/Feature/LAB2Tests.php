<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LAB2Test extends TestCase
{
    
    /**
     * @test 1
     */
    public function test_if_threads_webpage_exists()
    {
        $response = $this->get('/threads');

        $response->assertStatus(200);
    }

    /** @test 2 */
    public function a_user_can_view_all_threads()
    {
        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads');
        $response->assertSee($thread->title);
    }
}
