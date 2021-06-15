<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get("/");

        $response->assertStatus(200);
    }

    /** @test */
    function api_post()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();
        $this->actingAs($user)
            ->get("/")
            ->assertStatus(200);
    }
}
