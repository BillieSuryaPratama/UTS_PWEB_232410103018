<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanController extends Controller
{
    public function showPagePengelolaan()
    {
        $games = [
            [
                'name' => 'The Last of Us Part II',
                'developer' => 'Naughty Dog',
                'publisher' => 'Sony Interactive Entertainment',
                'release_date' => '2020-06-19',
                'platform' => 'PS4',
                'rating' => '93/100'
            ],
            [
                'name' => 'Cyberpunk 2077',
                'developer' => 'CD Projekt Red',
                'publisher' => 'CD Projekt',
                'release_date' => '2020-12-10',
                'platform' => 'PC, PS4, PS5, Xbox One, Xbox Series X/S, Stadia',
                'rating' => '76/100'
            ],
            [
                'name' => 'Ghost of Tsushima',
                'developer' => 'Sucker Punch Productions',
                'publisher' => 'Sony Interactive Entertainment',
                'release_date' => '2020-07-17',
                'platform' => 'PS4',
                'rating' => '83/100'
            ],
            [
                'name' => 'Final Fantasy VII Remake',
                'developer' => 'Square Enix',
                'publisher' => 'Square Enix',
                'release_date' => '2020-04-10',
                'platform' => 'PS4',
                'rating' => '87/100'
            ],
            [
                'name' => 'Doom Eternal',
                'developer' => 'id Software',
                'publisher' => 'Bethesda Softworks',
                'release_date' => '2020-03-20',
                'platform' => 'PC, PS4, PS5, Xbox One, Xbox Series X/S, Stadia',
                'rating' => '89/100'
            ],
            [
                'name' => 'Animal Crossing: New Horizons',
                'developer' => 'Nintendo',
                'publisher' => 'Nintendo',
                'release_date' => '2020-03-20',
                'platform' => 'Nintendo Switch',
                'rating' => '90/100'
            ],
            [
                'name' => 'Assassin’s Creed Valhalla',
                'developer' => 'Ubisoft Montreal',
                'publisher' => 'Ubisoft',
                'release_date' => '2020-11-10',
                'platform' => 'PC, PS4, PS5, Xbox One, Xbox Series X/S',
                'rating' => '83/100'
            ],
            [
                'name' => 'Resident Evil 3 (Remake)',
                'developer' => 'Capcom',
                'publisher' => 'Capcom',
                'release_date' => '2020-04-03',
                'platform' => 'PC, PS4, Xbox One',
                'rating' => '79/100'
            ],
            [
                'name' => 'Watch Dogs: Legion',
                'developer' => 'Ubisoft Toronto',
                'publisher' => 'Ubisoft',
                'release_date' => '2020-10-29',
                'platform' => 'PC, PS4, PS5, Xbox One, Xbox Series X/S',
                'rating' => '75/100'
            ],
            [
                'name' => 'Hades',
                'developer' => 'Supergiant Games',
                'publisher' => 'Supergiant Games',
                'release_date' => '2020-09-17',
                'platform' => 'PC, Nintendo Switch',
                'rating' => '93/100'
            ],
            [
                'name' => 'Half-Life: Alyx',
                'developer' => 'Valve',
                'publisher' => 'Valve',
                'release_date' => '2020-03-23',
                'platform' => 'PC (VR)',
                'rating' => '93/100'
            ],
            [
                'name' => 'Nioh 2',
                'developer' => 'Team Ninja',
                'publisher' => 'Sony Interactive Entertainment',
                'release_date' => '2020-03-13',
                'platform' => 'PS4',
                'rating' => '85/100'
            ],
            [
                'name' => 'Persona 5 Royal',
                'developer' => 'Atlus',
                'publisher' => 'Atlus',
                'release_date' => '2020-03-31',
                'platform' => 'PS4',
                'rating' => '94/100'
            ],
            [
                'name' => 'Final Fantasy XIV: Shadowbringers',
                'developer' => 'Square Enix',
                'publisher' => 'Square Enix',
                'release_date' => '2020-04-23',
                'platform' => 'PS4',
                'rating' => '89/100'
            ],
            [
                'name' => 'Crash Bandicoot 4: It’s About Time',
                'developer' => 'Toys for Bob',
                'publisher' => 'Activision',
                'release_date' => '2020-10-02',
                'platform' => 'PS4, Xbox One',
                'rating' => '85/100'
            ],
            [
                'name' => 'Watch Dogs: Legion',
                'developer' => 'Ubisoft Toronto',
                'publisher' => 'Ubisoft',
                'release_date' => '2020-10-29',
                'platform' => 'PC, PS4, PS5, Xbox One, Xbox Series X/S',
                'rating' => '75/100'
            ],
            [
                'name' => 'The Outer Worlds: Peril on Gorgon',
                'developer' => 'Obsidian Entertainment',
                'publisher' => 'Private Division',
                'release_date' => '2020-09-09',
                'platform' => 'PC, PS4, Xbox One',
                'rating' => '80/100'
            ],
            [
                'name' => 'Microsoft Flight Simulator',
                'developer' => 'Asobo Studio',
                'publisher' => 'Xbox Game Studios',
                'release_date' => '2020-08-18',
                'platform' => 'PC, Xbox Series X/S (coming later)',
                'rating' => '92/100'
            ],
            [
                'name' => 'Tony Hawk’s Pro Skater 1 + 2',
                'developer' => 'Vicarious Visions',
                'publisher' => 'Activision',
                'release_date' => '2020-09-04',
                'platform' => 'PC, PS4, Xbox One',
                'rating' => '89/100'
            ],
            [
                'name' => 'Mortal Kombat 11: Aftermath',
                'developer' => 'NetherRealm Studios',
                'publisher' => 'Warner Bros. Interactive Entertainment',
                'release_date' => '2020-05-26',
                'platform' => 'PC, PS4, Xbox One, Switch',
                'rating' => '82/100'
            ]
        ];

        return view('pengelolaan', compact('games'));
    }
}
