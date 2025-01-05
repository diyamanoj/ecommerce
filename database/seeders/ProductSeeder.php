<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()  {
        Product::create([
            'name' => 'Product 1',
            'description' => 'The most trending products',
            'price' => 99.99,
            'stock' => 50,
        ]);
    }

}
