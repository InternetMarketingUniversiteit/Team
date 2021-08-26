<?php

namespace Tests\Http\Profile;

use Tests\TestCase;

class ProfileShowTest extends TestCase
{
    /** @test */
    public function basic_game(): void
    {
        $response = $this->get('/api/profiles/1');

        $response->assertStatus(200);
        $response->assertJson([]);
    }
}
