<?php

namespace Tests\Http\Game;

use Database\Factories\GameFactory;
use Tests\TestCase;

class GamesIndexTest extends TestCase
{
    /** @test */
    public function basic_games(): void
    {
        GameFactory::new()->create();
        $response = $this->get('/api/games');

        $response->assertStatus(200);
        $response->assertJson([]);
    }
}
