<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'Donald Trump',
            'email' => 'DTrump@mail.com',
            'password' => Hash::make('whitehouse'),
        ]);
    }
}