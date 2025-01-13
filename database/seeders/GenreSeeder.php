<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'name' => '2D',
            ],
            [
                'name' => 'Action',
            ],
            [
                'name' => 'Action Adventure',
            ],
            [
                'name' => 'Action Role-Playing',
            ],
            [
                'name' => 'Adventure',
            ],
            [
                'name' => 'Casual',
            ],
            [
                'name' => 'Deck Building',
            ],
            [
                'name' => 'Farm Life Simulation',
            ],
            [
                'name' => 'First-Person Shooter',
            ],
            [
                'name' => 'Hack and Slash',
            ],
            [
                'name' => 'Horror',
            ],
            [
                'name' => 'Indie',
            ],
            [
                'name' => 'Non-Linear Gameplay',
            ],
            [
                'name' => 'Platformer',
            ],
            [
                'name' => 'Puzzle',
            ],
            [
                'name' => 'Real-Time Strategy',
            ],
            [
                'name' => 'Role-Playing',
            ],
            [
                'name' => 'Rogue-Lite',
            ],
            [
                'name' => 'Run and Gun',
            ],
            [
                'name' => 'Sandbox',
            ],
            [
                'name' => 'Side Scroller',
            ],
            [
                'name' => 'Simulation',
            ],
            [
                'name' => 'Strategy',
            ],
            [
                'name' => 'Survival',
            ],
            [
                'name' => 'Tower Defense',
            ],
        ]);
    }
}
