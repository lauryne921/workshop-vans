<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_register()
    {
        $response = $this->post('/', [
            'firstname' => 'Peter',
            'lastname' => 'Parker',
            'email' => 'peter@example.com',
        ]);

        $response->assertRedirect('/');
        $this->assertDatabaseHas('users', [
            'firstname' => 'Peter',
            'lastname' => 'Parker',
            'email' => 'peter@example.com',
        ]);
    }
}
