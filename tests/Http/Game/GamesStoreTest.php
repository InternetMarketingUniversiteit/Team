<?php

namespace Tests\Http\Game;

use Tests\TestCase;

class GamesStoreTest extends TestCase
{
    /** @test */
    public function basic_game(): void
    {
        $response = $this->post('/api/games', []);

        $response->assertStatus(200);
        $response->assertJson([]);
    }
}
