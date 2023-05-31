<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class tenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        for ($i = 1; $i <= 2; $i++) {
            DB::table('tenants')->insert([
                'tenant_id' => $i,
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'password' => bcrypt($faker->password)
            ]);
        }
    }
}
