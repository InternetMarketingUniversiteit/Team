<?php

namespace Tests\Http\User;

use Tests\TestCase;

class UserIndexTest extends TestCase
{
    /** @test */
    public function basic_users(): void
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
        $response->assertJson([]);
    }
}
