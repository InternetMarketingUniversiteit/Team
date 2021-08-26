<?php

namespace Tests\Http\User;

use Tests\TestCase;

class UserShowTest extends TestCase
{
    /** @test */
    public function basic_game(): void
    {
        $response = $this->get('/api/users/1');

        $response->assertStatus(200);
        $response->assertJson([]);
    }
}
