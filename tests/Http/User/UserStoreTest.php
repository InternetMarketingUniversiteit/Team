<?php

namespace Tests\Http\User;

use Tests\TestCase;

class UserStoreTest extends TestCase
{
    /** @test */
    public function basic_game(): void
    {
        $response = $this->post('/api/users', []);

        $response->assertStatus(200);
        $response->assertJson([]);
    }
}
