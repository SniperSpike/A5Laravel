<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Band;

class BandTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testMaakEenNieuweBandAan()
    {
        $band = Band::factory()->count(1)->create();
        $band = Band::latest()->first();
        $this->assertDatabaseHas('bands', [
            'bandnaam' => $band->bandnaam
        ]);
    }

    public function testCheckOfBandCorrectIsAangemaakt()
    {
        $id = Band::latest()->first();
        $response = $this->get('/bandinfo/'.$id->id);
        $response->assertStatus(200);
    }
}
