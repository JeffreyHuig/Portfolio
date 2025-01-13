<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('platforms')->insert([
            [
            'name' => 'Android',
            ],
            [
            'name' => 'iOS',
            ],
            [
            'name' => 'Linux',
            ],
            [
            'name' => 'MacOS',
            ],
            [
            'name' => 'Netflix',
            ],
            [
            'name' => 'Nintendo Switch',
            ],
            [
            'name' => 'Nvidia Shield',
            ],
            [
            'name' => 'PC (Microsoft Windows)',
            ],
            [
            'name' => 'PlayStation 3',
            ],
            [
            'name' => 'PlayStation 4',
            ],
            [
            'name' => 'PlayStation 5',
            ],
            [
            'name' => 'PlayStation Vita',
            ],
            [
            'name' => 'Virtual Reality',
            ],
            [
            'name' => 'visionOS',
            ],
            [
            'name' => 'XBox 360',
            ],
            [
            'name' => 'XBox One',
            ],
            [
            'name' => 'XBox Series S/X',
            ],
        ]);
    }
}
