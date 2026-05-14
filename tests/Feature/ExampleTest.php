<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_home_page_loads_with_expected_content(): void
    {
        $response = $this->get('/');

        $response
            ->assertStatus(200)
            ->assertSee('Welcome to the Demo Laravel Website');
    }

    public function test_about_page_loads_with_expected_content(): void
    {
        $response = $this->get('/about');

        $response
            ->assertStatus(200)
            ->assertSee('About This Project');
    }

    public function test_contact_page_loads_with_expected_content(): void
    {
        $response = $this->get('/contact');

        $response
            ->assertStatus(200)
            ->assertSee('hello@example.com');
    }
}
