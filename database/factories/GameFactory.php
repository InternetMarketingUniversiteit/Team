<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    protected $model = Game::class;

    public function definition()
    {
        $this->faker->seed(1);
        return [
            'type'               => 'table_football',
            'number_of_teams'    => 2,
            'min_users_per_team' => 1,
            'max_users_per_team' => 2,
        ];
    }
}
