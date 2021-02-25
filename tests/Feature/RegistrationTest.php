<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Jetstream\Jetstream;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

//    public function test_new_users_can_register()
//    {
//        $response = $this->post('/register', [
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//            'password' => 'password',
//            'institution' => 'institution',
//            'phone_number' => '085883754401',
//            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature(),
//        ]);
//
//        $this->assertAuthenticated();
//        $response->assertRedirect(RouteServiceProvider::HOME);
//    }
}
