<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@restucatering.id',
            'password' => bcrypt('12345678'),
            'no_tel' => '0813928989',
            'alamat' => 'jl.restu',
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@restucatering.id',
            'password' => bcrypt('12345678'),
            'no_tel' => '0813928989',
            'alamat' => 'jl.restu',
        ]);

        $user->assignRole('user');
    }
}
