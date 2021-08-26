<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserIndexRequest;
use App\Http\Requests\UserUpdateRequest;
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

    public function update(UserUpdateRequest $request, User $user): UserResource
    {
        $user->fill($request->validated());
        $user->save();
        return UserResource::make($user);
    }
}
