<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameStoreRequest;
use App\Http\Resources\ProfileResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller as BaseController;

class GameController extends BaseController
{
    public function show(Request $request): ProfileResource
    {
        return ProfileResource::make([]);
    }
    public function index(GameStoreRequest $request): JsonResource
    {
        return ProfileResource::collection([]);
    }

    public function store(GameStoreRequest $request): ProfileResource
    {
        return ProfileResource::make([]);
    }
}
