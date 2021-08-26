<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameStoreRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function show(Request $request): UserResource
    {
        return UserResource::make([]);
    }
    public function index(GameStoreRequest $request): JsonResource
    {
        return UserResource::collection([]);
    }

    public function store(GameStoreRequest $request): UserResource
    {
        return UserResource::make([]);
    }
}
