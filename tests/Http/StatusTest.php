<?php

namespace Tests\Http;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class StatusTest extends TestCase
{
    use WithoutMiddleware;

    /** @test */
    public function status_endpoint()
    {
        $response = $this->get('api/status');
        $response->assertStatus(200);
    }
}
