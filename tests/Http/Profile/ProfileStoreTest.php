<?php

namespace Tests\Http\Profile;

use Tests\TestCase;

class ProfileStoreTest extends TestCase
{
    /** @test */
    public function basic_game(): void
    {
        $response = $this->post('/api/profiles', []);

        $response->assertStatus(200);
        $response->assertJson([]);
    }
}
