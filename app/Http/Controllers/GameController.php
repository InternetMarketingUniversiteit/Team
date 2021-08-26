<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\GameResource;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller as BaseController;

class GameController extends BaseController
{
    public function show(Request $request, Game $game): GameResource
    {
        return GameResource::make($game);
    }
    public function index(UserUpdateRequest $request): JsonResource
    {
        return GameResource::collection([]);
    }

    public function store(UserUpdateRequest $request): GameResource
    {
        return GameResource::make([]);
    }
}
