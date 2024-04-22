<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@email.com',
                'type' => 1,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Manager User',
                'email' => 'manager@email.com',
                'type' => 2,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'user@email.com',
                'type' => 0,
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
