<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Band;

class searchBandTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testBand()
    {
        Band::factory()->count(5)->create();

        $first = Band::factory()->create(['bandnaam' => 'Name',
        'biografie' => 'Name',
        'tekstkleur' => 'Name',
        'achtergrondkleur' => 'Name',
        'themakleur' => 'Name',
        'url1' => 'Name',
        'url2' => 'Name',
        'url3' => 'Name',
        'banner' => 'Name',
    ]);


        $second = Band::factory()->create(['bandnaam' => 'Name',
        'biografie' => 'Name',
        'tekstkleur' => 'Name',
        'achtergrondkleur' => 'Name',
        'themakleur' => 'Name',
        'url1' => 'Name',
        'url2' => 'Name',
        'url3' => 'Name',
        'banner' => 'Name',
    ]);

        $bands = Band::searchBandTest("Name");

        $this->assertEquals($bands->count(), 2);
        $this->assertEquals($bands->first()->id, $first->id);
        $this->assertEquals($bands->last()->id, $second->id);

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
