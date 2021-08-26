<?php

namespace Tests\Feature;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReservationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_reservation_belongs_to_a_user()
    {
        $reservation = Reservation::factory()
            ->for(User::factory()->create())
            ->create();

        $this->assertInstanceOf(User::class, $reservation->user);
    }
}
