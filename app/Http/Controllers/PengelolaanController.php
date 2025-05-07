<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanController extends Controller
{
    public function showPagePengelolaan()
    {
        $games = [
            [
                'nama_game' => 'Astro Bot',
                'developer' => 'Team Asobi',
                'publisher' => 'Sony Interactive Entertainment',
                'tanggal_rilis' => '2024-09-06',
                'platform' => 'PS5',
                'rating' => '94/100'
            ],
            [
                'nama_game' => 'Elden Ring: Shadow of the Erdtree',
                'developer' => 'FromSoftware',
                'publisher' => 'Bandai Namco Entertainment',
                'tanggal_rilis' => '2024-06-21',
                'platform' => 'PS4, PS5, PC, Xbox One, Xbox Series X/S',
                'rating' => '94/100'
            ],
            [
                'nama_game' => 'Metaphor: ReFantazio',
                'developer' => 'Studio Zero',
                'publisher' => 'Sega, Atlus',
                'tanggal_rilis' => '2024-10-11',
                'platform' => 'PS4, PS5, PC, Xbox Series X/S',
                'rating' => '94/100'
            ],
            [
                'nama_game' => 'Final Fantasy VII Rebirth',
                'developer' => 'Square Enix',
                'publisher' => 'Square Enix',
                'tanggal_rilis' => '2024-02-29',
                'platform' => 'PS5',
                'rating' => '92/100'
            ],
            [
                'nama_game' => 'Slay the Princess - The Pristine Cut',
                'developer' => 'Black Tabby Games',
                'publisher' => 'Serenity Forge',
                'tanggal_rilis' => '2024-10-24',
                'platform' => 'Linux, macOS, Nintendo Switch, PS4, PS5, PC, Xbox One, Xbox Series X/S',
                'rating' => '92/100'
            ],
            [
                'nama_game' => 'UFO 50',
                'developer' => 'Mossmouth',
                'publisher' => 'Mossmouth',
                'tanggal_rilis' => '2024-09-18',
                'platform' => 'PC',
                'rating' => '92/100'
            ],
            [
                'nama_game' => 'Animal Well',
                'developer' => 'Shared Memory',
                'publisher' => 'Bigmode',
                'tanggal_rilis' => '2024-05-09',
                'platform' => 'PS5, Nintendo Switch, PC, Xbox Series X/S',
                'rating' => '91/100'
            ],
            [
                'nama_game' => 'Satisfactory',
                'developer' => 'Coffee Stain Studios',
                'publisher' => 'Coffee Stain Publishing',
                'tanggal_rilis' => '2024-09-10',
                'platform' => 'PC',
                'rating' => '91/100'
            ],
            [
                'nama_game' => 'Balatro',
                'developer' => 'LocalThunk',
                'publisher' => 'Playstack',
                'tanggal_rilis' => '2024-02-20',
                'platform' => 'Android, iOS, macOS, Nintendo Switch, PS4, PS5, PC, Xbox One',
                'rating' => '90/100'
            ],
            [
                'nama_game' => 'The Last of Us Part II Remastered',
                'developer' => 'Naughty Dog',
                'publisher' => 'Sony Interactive Entertainment',
                'tanggal_rilis' => '2024-01-19',
                'platform' => 'PS5',
                'rating' => '90/100'
            ],
            [
                'nama_game' => 'Thank Goodness You\'re Here!',
                'developer' => 'Coal Supper',
                'publisher' => 'Panic Inc.',
                'tanggal_rilis' => '2024-08-01',
                'platform' => 'macOS, Nintendo Switch, PS4, PS5, PC',
                'rating' => '90/100'
            ],
            [
                'nama_game' => 'Tekken 8',
                'developer' => 'Bandai Namco Studios / Arika',
                'publisher' => 'Bandai Namco Entertainment',
                'tanggal_rilis' => '2024-01-26',
                'platform' => 'PS5, PC, Xbox Series X/S',
                'rating' => '90/100'
            ],
            [
                'nama_game' => 'Dragon\'s Dogma 2',
                'developer' => 'Capcom',
                'publisher' => 'Capcom',
                'tanggal_rilis' => '2024-03-22',
                'platform' => 'PS5, PC, Xbox Series X/S',
                'rating' => '88/100'
            ],
            [
                'nama_game' => 'Black Myth: Wukong',
                'developer' => 'Game Science',
                'publisher' => 'Game Science',
                'tanggal_rilis' => '2024-08-20',
                'platform' => 'PS5, PC',
                'rating' => '81/100'
            ],
            [
                'nama_game' => 'Silent Hill 2 Remake',
                'developer' => 'Bloober Team',
                'publisher' => 'Konami',
                'tanggal_rilis' => '2024-10-08',
                'platform' => 'PS5, PC',
                'rating' => '86/100'
            ],
            [
                'nama_game' => 'Neva',
                'developer' => 'Nomada Studio',
                'publisher' => 'Devolver Digital',
                'tanggal_rilis' => '2024-11-14',
                'platform' => 'PS5, PC, Nintendo Switch, Xbox Series X/S',
                'rating' => '86/100'
            ],
            [
                'nama_game' => 'Prince of Persia: The Lost Crown',
                'developer' => 'Ubisoft Montpellier',
                'publisher' => 'Ubisoft',
                'tanggal_rilis' => '2024-01-18',
                'platform' => 'PS4, PS5, PC, Nintendo Switch, Xbox One, Xbox Series X/S',
                'rating' => '86/100'
            ],
            [
                'nama_game' => 'Nine Sols',
                'developer' => 'Red Candle Games',
                'publisher' => 'Red Candle Games',
                'tanggal_rilis' => '2024-04-30',
                'platform' => 'PC, PS4, PS5, Nintendo Switch',
                'rating' => '85/100'
            ],
            [
                'nama_game' => 'Still Wakes the Deep',
                'developer' => 'The Chinese Room',
                'publisher' => 'Secret Mode',
                'tanggal_rilis' => '2024-06-18',
                'platform' => 'PS5, PC, Xbox Series X/S',
                'rating' => '85/100'
            ],
            [
                'nama_game' => 'Helldivers 2',
                'developer' => 'Arrowhead Game Studios',
                'publisher' => 'Sony Interactive Entertainment',
                'tanggal_rilis' => '2024-02-08',
                'platform' => 'PS5, PC',
                'rating' => '85/100'
            ]
        ];

        return view('pengelolaan', compact('games'));
    }
}
