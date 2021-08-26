<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserIndexRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function show(Request $request, User $user): UserResource
    {
        return UserResource::make($user);
    }

    public function index(UserIndexRequest $request): JsonResource
    {
        return UserResource::collection(User::all());
    }

    public function store(UserStoreRequest $request): UserResource
    {
        return UserResource::make([]);
    }
}
