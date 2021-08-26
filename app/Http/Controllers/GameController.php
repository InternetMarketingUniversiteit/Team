<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Resources\GameResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller as BaseController;

class GameController extends BaseController
{
    public function show(Request $request): GameResource
    {
        return GameResource::make([]);
    }
    public function index(UserStoreRequest $request): JsonResource
    {
        return GameResource::collection([]);
    }

    public function store(UserStoreRequest $request): GameResource
    {
        return GameResource::make([]);
    }
}
