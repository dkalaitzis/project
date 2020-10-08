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
        // Mclaren Images
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

        // Ferrari Images
        DB::table('images')->insert([
            'path' => '/images/ferrari/ferrari1.jpeg',
            'car_id' => '2'
        ]);
        DB::table('images')->insert([
            'path' => '/images/ferrari/ferrari2.jpeg',
            'car_id' => '2'
        ]);
        DB::table('images')->insert([
            'path' => '/images/ferrari/ferrari3.jpeg',
            'car_id' => '2'
        ]);

        // Lambo Images
        DB::table('images')->insert([
            'path' => '/images/lambo/lambo1.jpeg',
            'car_id' => '3'
        ]);
        DB::table('images')->insert([
            'path' => '/images/lambo/lambo2.jpeg',
            'car_id' => '3'
        ]);
        DB::table('images')->insert([
            'path' => '/images/lambo/lambo3.jpeg',
            'car_id' => '3'
        ]);

        // Ford Images
        DB::table('images')->insert([
            'path' => '/images/ford/ford1.jpeg',
            'car_id' => '4'
        ]);
        DB::table('images')->insert([
            'path' => '/images/ford/ford2.jpeg',
            'car_id' => '4'
        ]);
        DB::table('images')->insert([
            'path' => '/images/ford/ford3.jpeg',
            'car_id' => '4'
        ]);

        // Aston Images
        DB::table('images')->insert([
            'path' => '/images/aston/aston1.jpeg',
            'car_id' => '5'
        ]);
        DB::table('images')->insert([
            'path' => '/images/aston/aston2.jpeg',
            'car_id' => '5'
        ]);
        DB::table('images')->insert([
            'path' => '/images/aston/aston3.jpeg',
            'car_id' => '5'
        ]);

        // BMW Images
        DB::table('images')->insert([
            'path' => '/images/bmw/bmw1.jpeg',
            'car_id' => '6'
        ]);
        DB::table('images')->insert([
            'path' => '/images/bmw/bmw2.jpeg',
            'car_id' => '6'
        ]);
        DB::table('images')->insert([
            'path' => '/images/bmw/bmw3.jpeg',
            'car_id' => '6'
        ]);
    }
}

