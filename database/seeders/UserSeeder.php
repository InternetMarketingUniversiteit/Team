<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name' => 'Tonny', 'surname' => 'Loorbach', 'email' => 'tonny@imu.nl', 'image' => 'profile-photos/online-marketing-coach-2-125x125.png'],
            ['name' => 'Martijn', 'surname' => 'van Tongeren', 'email' => 'martijn@imu.nl', 'image' => 'profile-photos/martijn-van-tongeren-500x500.png'],
            ['name' => 'Danielle', 'surname' => 'Bakker', 'email' => 'danielle@imu.nl', 'image' => 'profile-photos/Danielle-whiteboard1-125x125.jpg'],
            ['name' => 'Danielle', 'surname' => 'Riupassa', 'email' => 'danielle.riupassa@imu.nl', 'image' => 'profile-photos/danielleriupassa-125x125.png'],
            ['name' => 'Boris', 'surname' => 'Vreeswijk', 'email' => 'boris@imu.nl', 'image' => 'profile-photos/boris-125x125-2.png'],
            ['name' => 'Maartje', 'surname' => 'Daems', 'email' => 'maartje@imu.nl', 'image' => 'profile-photos/maartje-daems-125x125.jpg'],
            ['name' => 'Lynn', 'surname' => 'Renkens', 'email' => 'lynn@imu.nl', 'image' => 'profile-photos/lynn_renkens-125x125-1.jpeg'],
            ['name' => 'Kim', 'surname' => 'Kunstman', 'email' => 'kim@imu.nl', 'image' => 'profile-photos/kim-125x125.jpg'],
            ['name' => 'Max', 'surname' => 'Vreeken', 'email' => 'max@imu.nl', 'image' => 'profile-photos/maxvreeken-125x125-1.png'],
            ['name' => 'Filli', 'surname' => 'El-Mahi', 'email' => 'filli@imu.nl', 'image' => 'profile-photos/afbeelding-filli-125x125-1.jpg'],
            ['name' => 'Elmie', 'surname' => 'Reinders', 'email' => 'elmie@imu.nl', 'image' => 'profile-photos/elmie-125x125.jpeg'],
            ['name' => 'Frederieke', 'surname' => 'Slinger', 'email' => 'frederieke@imu.nl', 'image' => 'profile-photos/frederieke-125x125.jpg'],
            ['name' => 'Michelle', 'surname' => 'Potters', 'email' => 'michelle@imu.nl', 'image' => 'profile-photos/michelle-125x125-2.jpeg'],
            ['name' => 'Joost', 'surname' => 'Grol', 'email' => 'joost@imu.nl', 'image' => 'profile-photos/joost-grol-125x125.jpg'],
            ['name' => 'Douwe', 'surname' => 'Scheer', 'email' => 'douwe@phoenixsite.nl', 'image' => 'profile-photos/douwe-scheer-125x125.jpg'],
            ['name' => 'Dennis', 'surname' => 'van Hal', 'email' => 'dennis@phoenixsite.nl', 'image' => 'profile-photos/dennis-van-hal-125x125.jpg'],
            ['name' => 'Martijn', 'surname' => 'Weghorst', 'email' => 'martijn@plugandpay.nl', 'image' => 'profile-photos/martijn-weghorst-125x125.jpeg'],
            ['name' => 'Alex', 'surname' => 'van der Schans', 'email' => 'alex@plugandpay.nl', 'image' => 'profile-photos/alex-van-der-schans-125x125-2.jpg'],
            ['name' => 'Jelle', 'surname' => 'Scheer', 'email' => 'Jelle@phoenixsite.nl', 'image' => 'profile-photos/jelle-125x125-1.jpg'],
            ['name' => 'Bas', 'surname' => 'Bart', 'email' => 'bas@phoenixsite.nl', 'image' => 'profile-photos/bas-bart-125x125-3.png'],
            ['name' => 'Seb', 'surname' => 'Viergever', 'email' => 'seb@phoenixsite.nl', 'image' => 'profile-photos/seb-125x125-2.jpg'],
            ['name' => 'Matthijs', 'surname' => 'Dam', 'email' => 'matthijs@phoenixsite.nl', 'image' => 'profile-photos/matthijs_dam-125x125-1.png'],
            ['name' => 'Julius', 'surname' => 'van Dijk', 'email' => 'julius@phoenixsite.nl', 'image' => 'profile-photos/julius-125x125.jpg'],
            ['name' => 'Fenna', 'surname' => 'Veenstra', 'email' => 'fenna@phoenixsite.nl', 'image' => 'profile-photos/fenna-125x125-1.jpg'],
            ['name' => 'Sander', 'surname' => 'Krever', 'email' => 'sander@thehuddle.nl', 'image' => 'profile-photos/sander-krever-125x125.jpg'],
            ['name' => 'Jairo', 'surname' => 'Hulshof', 'email' => 'jairo@thehuddle.nl', 'image' => 'profile-photos/jairo-125x125-1.jpg'],
            ['name' => 'Chris', 'surname' => 'Snoek', 'email' => 'chris@thehuddle.nl', 'image' => 'profile-photos/chris_snoeks-125x125.jpg'],
            ['name' => 'Tim', 'surname' => 'van Engelen', 'email' => 'tim@plugandpay.nl', 'image' => 'profile-photos/tim-van-engelen-125x125-1.png'],
            ['name' => 'Kim', 'surname' => 'Willemstein', 'email' => 'kim@plugandpay.nl', 'image' => 'profile-photos/kim_plugpay-125x125-1.jpeg'],
            ['name' => 'Reindert', 'surname' => 'Vetter', 'email' => 'reindert@plugandpay.nl', 'image' => 'profile-photos/reindert-125x125-2.jpeg'],
            ['name' => 'Aron', 'surname' => 'Bakker', 'email' => 'aron@imu.nl', 'image' => 'profile-photos/aron-ux-deigner-125x125-1.jpg'],
            ['name' => 'Robin', 'surname' => 'Landweer', 'email' => 'robin@imu.nl', 'image' => 'profile-photos/robin_landweer-125x125-2.jpeg'],
            ['name' => 'Martin', 'surname' => 'Vestergaard', 'email' => 'martin@imu.nl', 'image' => 'profile-photos/martin-vestergaard-125x125-3.jpeg'],
        ];

        foreach ($users as $user) {
            User::create([
                'name'               => $user['name'] .' '. $user['surname'],
                'email'              => $user['email'],
                'email_verified_at'  => Carbon::now(),
                'password'           => Hash::make(strtolower($user['name'])),
                'profile_photo_path' => $user['image'],
            ]);
        }
    }
}
