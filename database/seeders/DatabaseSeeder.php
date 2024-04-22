<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Admin User',
            'email' => 'adminuser@email.com',
            'type' => 1,
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Manager User',
            'email' => 'manager@email.com',
            'type' => 2,
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@email.com',
            'type' => 0,
            'password' => bcrypt('123456')
        ]);


        User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@email.com',
            'type' => 3,
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'type' => 1,
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Admin Akademik',
            'email' => 'akademi@email.com',
            'type' => 1,
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Admin Keuangan',
            'email' => 'keuangan@email.com',
            'type' => 1,
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Admin LPPM',
            'email' => 'lppm@email.com',
            'type' => 1,
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Admin SDM',
            'email' => 'sdm@email.com',
            'type' => 1,
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Direktur',
            'email' => 'direktur@email.com',
            'type' => 2,
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Wakil Direktur 1',
            'email' => 'wd1@email.com',
            'type' => 2,
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Wakil Direktur 2',
            'email' => 'wd2@email.com',
            'type' => 2,
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Wakil Direktur 3',
            'email' => 'wd3@email.com',
            'type' => 2,
            'password' => bcrypt('12345')
        ]);

         // User tipe 0-User  

        User::create([
            'name' => 'Dosen',
            'email' => 'dosen@email.com',
            'type' => 0,
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@email.com',
            'type' => 0,
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Tendik',
            'email' => 'tendrik@email.com',
            'type' => 0,
            'password' => bcrypt('12345')
        ]);

    }
}