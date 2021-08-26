<?php

namespace Tests\Http\Game;

use Database\Factories\GameFactory;
use Tests\TestCase;

class GamesShowTest extends TestCase
{
    /** @test */
    public function game_type(): void
    {
        GameFactory::new()->create([
            'type' => 'table_football',
        ]);

        $response = $this->get('/api/games/1');

        $response->assertStatus(200);
        $response->assertJsonPath('data.type', 'table_football');
    }

    /** @test */
    public function game_with_team_data(): void
    {
        GameFactory::new()->create([
            'number_of_teams'    => 2,
            'min_users_per_team' => 1,
            'max_users_per_team' => 2,
        ]);

        $response = $this->get('/api/games/1');

        $response->assertStatus(200);
        $response->assertJsonPath('data.number_of_teams', 2);
        $response->assertJsonPath('data.min_users_per_team', 1);
        $response->assertJsonPath('data.max_users_per_team', 2);
    }
}
