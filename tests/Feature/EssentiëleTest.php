<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Beheer;
use App\Models\Band;
class EssentiëleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function LoginCheck()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/login');
        $response = $this->get('/dashboard');
        $response->assertStatus(200);
        
    }
    /** @test */
    public function UserMoetMeerDanEenBandKunnenAanmaken()
    {
        $user = User::latest()->first();
        $band1 = Band::factory()->create();
        $beheer1 = Beheer::create([
            'band_id' => $band1->id,
            'user_id' => $user->id,
            'eigenaar' => 1,
        ]);
        $band2 = Band::factory()->create();
        $beheer2 = Beheer::create([
            'band_id' => $band2->id,
            'user_id' => $user->id,
            'eigenaar' => 1,
        ]);

        $this->assertDatabaseHas('beheer', [
            'band_id' => $band1->id,
            'user_id' => $user->id
        ]);
        $this->assertDatabaseHas('beheer', [
            'band_id' => $band2->id,
            'user_id' => $user->id
        ]);
        $band1->delete();
        $band2->delete();
        $beheer1->delete();
        $beheer2->delete();
        $user->delete();
    }
}
