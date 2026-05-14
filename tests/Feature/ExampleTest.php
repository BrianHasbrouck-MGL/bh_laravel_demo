<?php

namespace Tests\Feature;

use App\Models\Submission;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_pages_are_available(): void
    {
        $this->get('/')->assertRedirect('/submit');
        $this->get('/submit')->assertOk();
        $this->get('/history')->assertOk();
        $this->get('/about')->assertOk();
        $this->get('/contact')->assertOk();
    }

    public function test_submitted_thought_is_stored_and_shown_in_history(): void
    {
        $response = $this->post('/submit', [
            'message' => 'This is my first thought.',
        ]);

        $response->assertRedirect('/history');
        $this->assertDatabaseHas('submissions', [
            'message' => 'This is my first thought.',
        ]);
        $this->get('/history')->assertSeeText('This is my first thought.');
    }

    public function test_history_is_chronological(): void
    {
        Submission::create(['message' => 'First']);
        Submission::create(['message' => 'Second']);

        $response = $this->get('/history');
        $response->assertSeeTextInOrder(['First', 'Second']);
    }
}
