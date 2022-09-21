<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Band;

class BandTest extends TestCase
{
    /** @test */
    public function BandAanmaken()
    {
        $band = Band::factory()->make();
        $band = Band::latest()->first();
        $this->assertDatabaseHas('bands', [
            'bandnaam' => $band->bandnaam
        ]);
    }
    /** @test */
    public function BandVerifiëren()
    {
        $id = Band::latest()->first();
        $response = $this->get('/bandinfo/'.$id->id);
        $response->assertStatus(200);
    }
}
