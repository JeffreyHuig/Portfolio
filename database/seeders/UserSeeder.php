<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Test',
                'last_name' => 'User',
                'email' => 'test@example.com',
                'email_verified_at' => now(),
                'password' => '$2y$12$aD70spOZt3oEWPmfFe767.b1KdLbssMO98bky7whX2q/vvQbfccxK',
                'remember_token' => Str::random(10),
            ],
            [
                'first_name' => 'Jeffrey',
                'last_name' => 'Huig',
                'email' => 'jaj.huig@hotmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$12$aD70spOZt3oEWPmfFe767.b1KdLbssMO98bky7whX2q/vvQbfccxK',
                'remember_token' => Str::random(10),
            ]
        ]);
    }
}
