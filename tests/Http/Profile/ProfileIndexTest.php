<?php

namespace Tests\Http\Profile;

use Tests\TestCase;

class ProfileIndexTest extends TestCase
{
    /** @test */
    public function basic_profiles(): void
    {
        $response = $this->get('/api/profiles');

        $response->assertStatus(200);
        $response->assertJson([]);
    }
}
