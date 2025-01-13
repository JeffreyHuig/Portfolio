<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\Genre;
use App\Models\Mode;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\AssignOp\Mod;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            DeveloperSeeder::class,
            GenreSeeder::class,
            ModeSeeder::class,
            PlatformSeeder::class,
            GameSeeder::class,
        ]);   
    }
}
