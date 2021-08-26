<?php

namespace Tests\Feature;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function a_user_has_reservations()
    {
        $user = User::factory()
            ->has(Reservation::factory()->count(3))
            ->create();

        $this->assertCount(3, $user->reservations);
    }

    /**
     * @test
     * @dataProvider provideDataForContact
     */
    public function a_user_has_profile_props($data)
    {
        dump($data);
        $field = $data['field'];
        $value = $data['value'];

        $user = User::factory()->create([$field => $value]);

        $this->assertEquals($user->{$field}, $value);
    }

    /**
     * DataProvider for contact details test
     * @return array
     */
    public function provideDataForContact(): array
    {
        return [
        [
            [
                'field' => 'name',
                'value'=> 'Tim van Engelen'
            ]
        ],[
            [
                'field' => 'username',
                'value'=> 'timvanengelen'
            ]
        ],[
                [
                    'field' => 'date_of_birth',
                    'value'=> '14-10-1986'
                ]
            ]
        ];
    }
}
