<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'Test Name User',
            'firstname' => 'Test Firstname User',
            'email' => 'test@example.com',
            'email_verified_at' => date(now()),
            'password' => 'password',
            'password_confirmation' => 'password',
            'typable_type' => 'App\Models\Customer',
            'typable_id' => User::max('typable_id') + 1,
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
