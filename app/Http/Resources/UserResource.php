<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request): array
    {
        /**
         * @var User   $user
         * @var Carbon $birth
         */
        $user  = $this->resource;
        $birth = $user->date_of_birth;
        return [
            'name'          => $user->name,
            'email'         => $user->email,
            'date_of_birth' => $birth->toDateString(),
        ];
    }
}
