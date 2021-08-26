<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            1 => 'IMU',
            2 => 'Phoenix',
            3 => 'Plug&Pay',
            4 => 'Huddle',
        ];
        foreach ($teams as $id => $name) {
            Team::create(['id' => $id, 'name' => $name]);
        }
    }
}
