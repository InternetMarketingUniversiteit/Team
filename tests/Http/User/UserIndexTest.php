<?php

namespace Tests\Http\User;

use Database\Factories\UserFactory;
use Tests\TestCase;

class UserIndexTest extends TestCase
{
    /** @test */
    public function basic_users(): void
    {
        UserFactory::new()->create();
        $response = $this->get('/api/users');

        $response->assertStatus(200);
        $response->assertJsonPath('data.0', [
            'name'          => 'Adah Reichel',
            'email'         => 'wziemann@example.net',
            'date_of_birth' => '2021-08-06',
        ]);
    }
}
