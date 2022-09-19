<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class PaginaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomePagina()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Login');
        $response->assertSeeText('Aan de slag');
        $response->assertSeeText('Meld je gratis aan');
    }

    public function testVerkennenPagina()
    {
        $response = $this->get('/verkennen');

        $response->assertStatus(200);
        $response->assertSeeText('Onze bibliotheek');
    }

    public function testLoginPagina()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSeeText('Email Address');
        $response->assertSeeText('Password');
        $response->assertSeeText('Login');
        $response->assertSeeText('Meld je aan');
    }

    public function testRegisterPagina()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
        $response->assertSeeText('Gebruikersnaam');
        $response->assertSeeText('Email');
        $response->assertSeeText('Wachtwoord');
        $response->assertSeeText('Wachtwoord bevestigen');
        $response->assertSeeText('Aanmelden');
    }

    public function testDashboardPagina()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/login');

        $response = $this->get('/dashboard');
        $response->assertSeeText('Mijn Bands');
        $response->assertSeeText('Dashboard');


    }
}
 