<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'car_name'  => 'McLaren 720S',
            'car_brand' => 'mclaren',
            'car_price' => '302000',
            'car_description' => 'The McLaren 720S is a sports car designed and manufactured by British automobile manufacturer McLaren Automotive. It is the second all-new car in the McLaren Super Series, replacing the 650S beginning in May 2017.'
        ]);
        DB::table('cars')->insert([
            'car_name'  => 'Ferrari SF90 Stradale',
            'car_brand' => 'ferrari',
            'car_price' => '376000',
            'car_description' => 'The Ferrari SF90 Stradale is a mid-engine PHEV sports car produced by the Italian automobile manufacturer Ferrari. The car shares its name with the SF90 Formula One car with SF90 standing for the 90th anniversary of the Scuderia Ferrari racing team and "Stradale" meaning road.'
        ]);
        DB::table('cars')->insert([
            'car_name'  => 'Lamborghini Huracan Evo',
            'car_brand' => 'lamborghini',
            'car_price' => '980000',
            'car_description' => 'The Huracán EVO is the evolution of the most successful V10-powered Lamborghini ever. The result of fine-tuning and refining existing features, combined with new design solutions that increase performance, the car stands out for its ability to anticipate and cater to the driver’s behavior, expectations and desires.'
        ]);
        DB::table('cars')->insert([
            'car_name'  => 'Ford GT',
            'car_brand' => 'ford',
            'car_price' => '500000',
            'car_description' => 'This car has a racing history—it won its class at the 2016 24 Hours of LeMans—that shows it belongs alongside the worlds most desirable supercars and one of the most exclusive, expensive, and extraordinary cars the Blue Oval brand has ever built.'
        ]);
        DB::table('cars')->insert([
            'car_name'  => 'Aston Martin Valhala',
            'car_brand' => 'aston',
            'car_price' => '730000',
            'car_description' => 'The Aston Martin Valhalla is an upcoming mid-engine sports car manufactured by British automobile manufacturer Aston Martin in collaboration with Red Bull Racing. The car is meant to sit below the flagship Valkyrie track focused sports car and is intended to be more usable as an everyday car.'
        ]);
        DB::table('cars')->insert([
            'car_name'  => 'BMW i8',
            'car_brand' => 'bmw',
            'car_price' => '148000',
            'car_description' => 'The BMW i8 is a plug-in hybrid sports car developed by BMW. The i8 is part of the BMW electrified fleet and is marketed under the BMW i sub-brand. The production version of the BMW i8 was unveiled at the 2013 Frankfurt Motor Show, and was released in Germany in June 2014.'
        ]);
    }
}
