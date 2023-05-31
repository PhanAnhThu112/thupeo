<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class addressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker= Faker::create();

        for ($i = 1; $i <= 100; $i++) {
            DB::table('addresses')->insert([
                'address_id' => $i,
                'district' => $faker->city,
                'wards' => $faker->citySuffix,
                'street' => $faker->streetAddress
            ]);
        }
    }
}