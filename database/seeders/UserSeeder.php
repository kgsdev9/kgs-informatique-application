<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name'=> 'administrateur',
             'password' => Hash::make('guy123@G'),
             'email'=> 'kgsdev8@gmail.com',
             'is_admin'=> 1
            ]
        ]);
    }
}
