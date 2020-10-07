<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'path' => '/images/mclaren/mclaren1.jpeg',
            'car_id' => '1'
        ]);

        DB::table('images')->insert([
            'path' => '/images/mclaren/mclaren2.jpeg',
            'car_id' => '1'
        ]);

        DB::table('images')->insert([
            'path' => '/images/mclaren/mclaren3.jpeg',
            'car_id' => '1'
        ]);

    }
}

