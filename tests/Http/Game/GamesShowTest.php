<?php

namespace Tests\Http\Game;

use Tests\TestCase;

class GamesShowTest extends TestCase
{
    /** @test */
    public function basic_game(): void
    {
        $response = $this->get('/api/games/1');

        $response->assertStatus(200);
        $response->assertJson([]);
    }
}
