<?php

namespace Tests\Feature;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_has_reservations()
    {
        $user = User::factory()
            ->has(Reservation::factory()->count(3))
            ->create();

        $this->assertCount(3, $user->reservations);
    }
}
