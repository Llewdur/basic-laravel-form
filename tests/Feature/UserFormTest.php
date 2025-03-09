<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserFormTest extends TestCase
{
    use RefreshDatabase;

    // Test form submission with valid data
    public function test_form_submission_with_valid_data()
    {
        $response = $this->post('/', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'comments' => 'This is a test comment.',
        ]);

        $response->assertRedirect('/thank-you');
        $this->assertDatabaseHas('users', [
            'email' => 'john@example.com',
        ]);
    }

    // Test form submission with invalid data
    public function test_form_submission_with_invalid_data()
    {
        $response = $this->post('/', [
            'name' => '',
            'email' => 'invalid-email',
            'comments' => '',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'comments']);
    }
}
