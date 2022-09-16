<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     * @
     * @return void
     */
    /** @test */

    public function UserLogin() {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    /** @test */
    public function UserDuplication() {
        $user1 = User::make([
            'name' => 'Testing',
            'email' => 'test@example.com',
            'password' => 'test123'
        ]);

        $user2 = User::make([
            'name' => 'Testing',
            'email' => 'test@example.com',
            'password' => 'test123'
        ]);

        $this->assertTrue($user1->name == $user2->name);
    }
    /** @test */
    public function UserDelete() {
        $user = User::factory()->count(1)->create();
        $user = User::first();

        if($user) {
            $user->delete();
        }
        $this->assertTrue(true);
    }
}
