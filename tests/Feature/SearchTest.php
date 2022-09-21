<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
Use App\Models\Band;

class SearchTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function SearchVoorEenBand()
    {
        $response = $this->get('/');

        $create = Band::factory()->create();
        $create->bandnaam = "Hoppa";
        $create->save();
        
        $band = Band::search("Hoppa")->get();
        $this->assertTrue($band[0]->bandnaam == "Hoppa");
        $create->delete();
        
    }
}
