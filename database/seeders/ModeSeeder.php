<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modes')->insert([
            ['name' => 'Single Player'],
            ['name' => 'Multiplayer'],
            // ['name' => 'Co-op'],
            // ['name' => 'VR'],
            // ['name' => 'AR'],
        ]);
    }
}
