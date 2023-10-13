<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Role::factory(1)->create();
        Role::factory()->create([
            'nama' => 'Operator',
            'deskripsi' => 'Memiliki Sebagian Besar Hak Akses Pada Sistem Ini'
        ]);
        Role::factory()->create([
            'nama' => 'Ketua Tim',
            'deskripsi' => 'Memiliki Hak Akses Untuk Melakukan Beberapa Fitur Pada Sistem Ini'
        ]);

        User::factory(1)->create();
        User::factory()->create([
            'role_id' => 2,
            'username' => 'bayuindriyanto',
            'email' => 'bayu@gmail.com',
            'password' => 'password', //password
            'whatsapp' => '085858038671',
            'foto' => null,
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);
        User::factory()->create([
            'role_id' => 3,
            'username' => 'cipta',
            'email' => 'cipta@gmail.com',
            'password' => 'password', //password
            'whatsapp' => '085858038761',
            'foto' => null,
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);
    }
}
