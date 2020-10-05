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
            'user_id' => '1',
            'car_id' => '1',
            'review' => 'TestReview'
        ]);
        DB::table('reviews')->insert([
            'user_id' => '2',
            'car_id' => '2',
            'review' => 'TestReview'
        ]);
        DB::table('reviews')->insert([
            'user_id' => '2',
            'car_id' => '3',
            'review' => 'TestReview'
        ]);
        DB::table('reviews')->insert([
            'user_id' => '1',
            'car_id' => '4',
            'review' => 'TestReview'
        ]);
        DB::table('reviews')->insert([
            'user_id' => '2',
            'car_id' => '5',
            'review' => 'TestReview'
        ]);
        DB::table('reviews')->insert([
            'user_id' => '1',
            'car_id' => '6',
            'review' => 'TestReview'
        ]);
    }
}

