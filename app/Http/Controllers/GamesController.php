<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameStoreRequest;
use App\Http\Resources\GameResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller as BaseController;

class GamesController extends BaseController
{
    public function show(Request $request): GameResource
    {
        return GameResource::make([]);
    }
    public function index(GameStoreRequest $request): JsonResource
    {
        return GameResource::collection([]);
    }

    public function store(GameStoreRequest $request): GameResource
    {
        return GameResource::make([]);
    }
}
