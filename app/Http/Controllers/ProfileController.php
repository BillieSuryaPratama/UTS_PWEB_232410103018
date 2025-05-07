<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showPageProfile(Request $request)
    {
        $username = session('username');
        $profiles = [
            'billie' => [
                'nama' => 'Billie Surya Pratama',
                'username' => 'billie',
                'email' => 'billie.surya.pratama@gmail.com',
                'tanggal_lahir' => '2004-05-06',
                'gender' => 'Laki-laki',
                'biodata' => 'Penggemar game bergenre RPG yang menyukai tantangan dan selalu mencari pengalaman bermain yang mendalam dan menantang.'
            ],
        ];

        $profile = $profiles[$username];

        return view('profile', compact('profile'));
    }
}
