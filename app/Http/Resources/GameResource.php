<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Game;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    public function toArray($request): array
    {
        /**
         * @var Game $game
         */
        $game = $this->resource;
        return [
            'type'               => $game->type,
            'number_of_teams'    => $game->number_of_teams,
            'min_users_per_team' => $game->min_users_per_team,
            'max_users_per_team' => $game->max_users_per_team,
        ];
    }
}
