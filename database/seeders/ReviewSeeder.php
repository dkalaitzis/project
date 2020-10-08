<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'user_id' => '2',
            'car_id' => '1',
            'review' => 'I love this car it is so fast !!!'
        ]);
        DB::table('reviews')->insert([
            'user_id' => '3',
            'car_id' => '1',
            'review' => 'A very nice car'
        ]);
        DB::table('reviews')->insert([
            'user_id' => '2',
            'car_id' => '2',
            'review' => 'This is the best car!!!'
        ]);
        DB::table('reviews')->insert([
            'user_id' => '2',
            'car_id' => '3',
            'review' => 'Buy this car it is great!!'
        ]);
        DB::table('reviews')->insert([
            'user_id' => '3',
            'car_id' => '4',
            'review' => 'My car never arrived where is my refund?'
        ]);
        DB::table('reviews')->insert([
            'user_id' => '2',
            'car_id' => '5',
            'review' => 'Can I pay in BTC?'
        ]);
        DB::table('reviews')->insert([
            'user_id' => '3',
            'car_id' => '6',
            'review' => 'Do not buy this car :( '
        ]);
    }
}

