<?php

namespace Tests\Http\Reservation;

use Tests\TestCase;

class ReservationIndexTest extends TestCase
{
    /** @test */
    public function zero_reservations(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
