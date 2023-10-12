<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'hajinulhakim',
            'email' => 'hakim@gmail.com',
            'password' => 'password', //password
            'whatsapp' => '085858038176',
            'foto' => null,
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);
    }
}
