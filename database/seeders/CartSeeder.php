<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Using Faker for generating fake data
        $faker = Faker::create();

        // Seed the 'carts' table with 10 random records
        for ($i = 0; $i < 10; $i++) {
            DB::table('carts')->insert([
                'user_id' => $faker->numberBetween(1, 5), // Assuming user IDs between 1 and 5
                'product_id' => $faker->numberBetween(1, 10), // Assuming product IDs between 1 and 10
                'quantity' => $faker->numberBetween(1, 3),
                'price' => $faker->randomFloat(2, 10, 100), // Random price between 10 and 100
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
