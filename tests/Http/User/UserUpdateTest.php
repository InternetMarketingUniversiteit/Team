<?php

namespace Tests\Http\User;

use Database\Factories\UserFactory;
use Tests\TestCase;

class UserUpdateTest extends TestCase
{
    /** @test */
    public function basic_user(): void
    {
        UserFactory::new()->create();
        $response = $this->patch('/api/users/1', [
            'date_of_birth' => '2021-08-03',
        ]);

        $response->assertStatus(200);
        $response->assertJsonPath('data', [
            'name'          => 'Adah Reichel',
            'email'         => 'wziemann@example.net',
            'date_of_birth' => '2021-08-03',
        ]);
    }
}
