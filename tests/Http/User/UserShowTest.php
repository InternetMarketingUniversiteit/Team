<?php

namespace Tests\Http\User;

use Database\Factories\UserFactory;
use Tests\TestCase;

class UserShowTest extends TestCase
{
    /** @test */
    public function basic_user(): void
    {
        UserFactory::new()->create();
        $response = $this->get('/api/users/1');

        $response->assertStatus(200);
        $response->assertJson([

        ]);
    }
}
