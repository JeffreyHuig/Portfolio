<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('developers')->insert([
            [
                'name' => '2K Australia',
            ],
            [
                'name' => 'Aspyr Media',
            ],
            [
                'name' => 'ConcernedApe',
            ],
            [
                'name' => 'ConcernedApe LLC',
            ],
            [
                'name' => 'Codeglue',
            ],
            [
                'name' => 'Daniel Mullins Games',
            ],
            [
                'name' => 'Endava',
            ],
            [
                'name' => 'Engine Software',
            ],
            [
                'name' => 'Exozet Berlin GmbH',
            ],
            [
                'name' => 'Gearbox Software',
            ],
            [
                'name' => 'Mojang Studios',
            ],
            [
                'name' => 'Ninja Kiwi',
            ],
            [
                'name' => 'Pipeworks Software',
            ],
            [
                'name' => 'Re-Logic',
            ],
            [
                'name' => 'SuperNimbus',
            ],
            [
                'name' => 'Team Horay',
            ],
            [
                'name' => 'Thekla, Inc.',
            ],
            [
                'name' => 'The Secret Police Limited',
            ],
            [
                'name' => 'Unknown Worlds Entertainment',
            ],
            [
                'name' => 'Veewo Games',
            ],
        ]);
    }
}
