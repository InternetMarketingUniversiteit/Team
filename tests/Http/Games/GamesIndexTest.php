<?php

namespace Tests\Http\Games;

use Tests\TestCase;

class GamesIndexTest extends TestCase
{
    /** @test */
    public function basic_games(): void
    {
        $response = $this->get('/api/games');

        $response->assertStatus(200);
        $response->assertJson([]);
    }
}
