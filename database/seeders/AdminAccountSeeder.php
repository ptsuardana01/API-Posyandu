<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => "Admin",
            'email' => "admin@admin.com",
            'password' => Hash::make('12345678'),
        ]);

        $user->attachRole('admin');

        $user2 = User::create([
            'name' => "user",
            'email' => "user@user.com",
            'password' => Hash::make('12345678'),
        ]);

        $user2->attachRole('user');

        $user3 = User::create([
            'name' => "kader",
            'email' => "kader@kader.com",
            'password' => Hash::make('12345678'),
        ]);

        $user3->attachRole('kader');
    }
}
