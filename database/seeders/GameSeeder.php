<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'name' => 'Bloons Tower Defense 6',
                'release_date' => '06-14-2018',
                'developers' => [12],
                'genres' => [25, 23, 16],
                'modes' => [1, 2],
                'platforms' => [1, 2, 4, 5, 8, 14, 16, 17],
            ],
            [
                'name' => 'Borderlands 2',
                'release_date' => '09-18-2012',
                'developers' => [2, 10],
                'genres' => [4, 9, 10],
                'modes' => [1, 2],
                'platforms' => [1, 3, 4, 6, 8, 9, 10, 12, 15, 16],
            ],
            [
                'name' => 'Borderlands The Pre-Sequel',
                'release_date' => '14-10-2014',
                'developers' => [1, 2, 10],
                'genres' => [4, 5, 9],
                'modes' => [1, 2],
                'platforms' => [1, 3, 4, 6, 8, 9, 10, 15, 16],
            ],
            [
                'name' => 'Catan Universe',
                'release_date' => '25-04-2017',
                'developers' => [7, 9, 15],
                'genres' => [6, 23],
                'modes' => [1, 2],
                'platforms' => [1, 2, 4, 8],
            ],
            [
                'name' => 'Dungreed',
                'release_date' => '14-02-2018',
                'developers' => [16],
                'genres' => [1, 2, 12, 14, 18, 21],
                'modes' => [1],
                'platforms' => [6, 8, 10],
            ],
            [
                'name' => 'Inscryption',
                'release_date' => '19-10-2021',
                'developers' => [6],
                'genres' => [5, 7, 11, 15, 18, 23],
                'modes' => [1],
                'platforms' => [3, 4, 6, 8, 10, 11, 16, 17],
            ],
            [
                'name' => 'Minecraft',
                'release_date' => '18-11-2011',
                'developers' => [11],
                'genres' => [20, 24],
                'modes' => [1, 2],
                'platforms' => [1, 2, 3, 4, 6, 8, 10, 11, 16, 17],
            ],
            [
                'name' => 'Neon Abyss',
                'release_date' => '14-07-2020',
                'developers' => [20],
                'genres' => [1, 2, 14, 18, 19, 21],
                'modes' => [1],
                'platforms' => [6, 8, 10, 16],
            ],
            [
                'name' => 'Stardew Valley',
                'release_date' => '26-02-2016',
                'developers' => [3, 4, 18],
                'genres' => [5, 8, 12, 17, 22],
                'modes' => [1, 2],
                'platforms' => [1, 3, 4, 6, 8, 10, 12, 16],
            ],
            [
                'name' => 'Subnautica',
                'release_date' => '23-01-2018',
                'developers' => [19],
                'genres' => [3, 24],
                'modes' => [1],
                'platforms' => [4, 6, 8, 10, 11, 13, 16, 17],
            ],
            [
                'name' => 'Terraria',
                'release_date' => '16-08-2012',
                'developers' => [5, 8, 13, 14],
                'genres' => [3, 13],
                'modes' => [1, 2],
                'platforms' => [1, 2, 3, 4, 6, 8, 9, 10, 12, 15, 16],
            ],
            [
                'name' => 'The Witness',
                'release_date' => '26-01-2016',
                'developers' => [17],
                'genres' => [5, 12, 15],
                'modes' => [1],
                'platforms' => [1, 2, 4, 7, 8, 10, 16],
            ],
        ];

        foreach ($games as $game) {
            $gameId = DB::table('games')->insertGetId([
                'name' => $game['name'],
                'release_date' => $game['release_date'],
            ]);

            foreach ($game['developers'] as $developerId) {
                DB::table('developer_game')->insert([
                    'game_id' => $gameId,
                    'developer_id' => $developerId,
                ]);
            }

            foreach ($game['genres'] as $genreId) {
                DB::table('genre_game')->insert([
                    'game_id' => $gameId,
                    'genre_id' => $genreId,
                ]);
            }

            foreach ($game['modes'] as $modeId) {
                DB::table('mode_game')->insert([
                    'game_id' => $gameId,
                    'mode_id' => $modeId,
                ]);
            }

            foreach ($game['platforms'] as $platformId) {
                DB::table('platform_game')->insert([
                    'game_id' => $gameId,
                    'platform_id' => $platformId,
                ]);
            }
        }
    }
}
