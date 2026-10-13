<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_program_pages_return_successful_response(): void
    {
        $this->get('/sd')->assertStatus(200);
        $this->get('/ponpes')->assertStatus(200);
        $this->get('/kbtk')->assertStatus(200);
    }
}
