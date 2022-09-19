<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class PaginaTest extends TestCase
{
    /**
     * Checkt of de Home pagina compleet is en werkend
     *
     * @return void
     */
    public function testPaginaHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Login');
        $response->assertSeeText('Aan de slag');
        $response->assertSeeText('Meld je gratis aan');
    }

    /**
     * Checkt of de Verkennen pagina compleet is en werkend
     *
     * @return void
     */
    public function testPaginaVerkennen()
    {
        $response = $this->get('/verkennen');

        $response->assertStatus(200);
        $response->assertSeeText('Onze bibliotheek');
    }

    /**
     * Checkt of de Login pagina compleet is en werkend
     *
     * @return void
     */
    public function testPaginaLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSeeText('Email Address');
        $response->assertSeeText('Password');
        $response->assertSeeText('Login');
        $response->assertSeeText('Meld je aan');
    }

    /**
     * Checkt of de Register pagina compleet is en werkend
     *
     * @return void
     */
    public function testPaginaRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
        $response->assertSeeText('Gebruikersnaam');
        $response->assertSeeText('Email');
        $response->assertSeeText('Wachtwoord');
        $response->assertSeeText('Wachtwoord bevestigen');
        $response->assertSeeText('Aanmelden');
    }

    /**
     *
     * Checkt of de Dashboard pagina compleet is en werkend
     *
     * @return void
     */
    public function testPaginaDashboard()
    {
        $user = User::factory()->make();
        $response = $this->actingAs($user)->get('/login');

        $response = $this->get('/dashboard');
        $response->assertSeeText('Mijn Bands');
        $response->assertSeeText('Dashboard');
    }

    /**
     * Checkt of de Edit pagina compleet is en werkend
     *
     * @return void
     */
    public function testPaginaEdit()
    {
        $user = User::factory()->make();
        $response = $this->actingAs($user)->get('/login');

        $response = $this->get('/edit');
        $response->assertSeeText('Band Naam');
        $response->assertSeeText('Achtergrond kleur');
        $response->assertSeeText('Text kleur');
        $response->assertSeeText('Thema kleur');
        $response->assertSeeText('Video 1');
        $response->assertSeeText('Video 2');
        $response->assertSeeText('Video 3');
        $response->assertSeeText('Opslaan');
        $response->assertSeeText('Annuleren');
    }
}
 