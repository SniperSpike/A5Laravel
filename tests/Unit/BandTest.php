<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Band;
use Illuminate\Foundation\Testing\RefreshDatabase;
class BandTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /** @test */
    public function BandCreate()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
