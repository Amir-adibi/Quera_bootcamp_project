<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'iPhone 13',
            'price' => 799,
            'numbers_available' => 12
        ]);

        Product::create([
            'name' => 'iPhone 13 Pro',
            'price' => 899,
            'numbers_available' => 15
        ]);

        Product::create([
            'name' => 'iPhone 14 Pro',
            'price' => 999,
            'numbers_available' => 8
        ]);
    }
}
