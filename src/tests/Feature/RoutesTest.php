<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoutesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * 1. GIVE: a Nuser not logged in
     * 2. WHEN: make a request to main page
     * 3. THEN: response status 200
     *
     * @test
     */

    function main_page_without_login()
    {
        $this->withoutExceptionHandling();

        $this->get("/")->assertStatus(200);
    }

    /**
     * 1. GIVEN: a user logged in
     * 2. WHEN: make a request o main page
     * 3. THEN: response status 200
     *
     * @test
     */
    function main_page_with_login()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $this->actingAs($user)
            ->get("/")
            ->assertSatus(200);
    }
}
