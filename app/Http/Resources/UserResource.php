<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class UserResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var User $user */
        $user = $this->resource;
        return [
            'name' => $user->name(),
            'email' => $user->unique()->safeEmail(),
            'date_of_birth' => $user->date,
        ];
    }
}
