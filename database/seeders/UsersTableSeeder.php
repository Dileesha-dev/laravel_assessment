<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password'),
                'roles' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password'),
                'roles' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael@example.com',
                'password' => Hash::make('password'),
                'roles' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily Brown',
                'email' => 'emily@example.com',
                'password' => Hash::make('password'),
                'roles' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Christopher Wilson',
                'email' => 'christopher@example.com',
                'password' => Hash::make('password'),
                'roles' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('12345678'),
                'roles' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
