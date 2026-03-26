<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
        use WithoutModelEvents;

        public function run(): void
        {
            DB::table('products')->insert([
                ['name' => 'Wireless Headphones', 'description' => 'Premium sound quality', 'price' => 79.99, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Mechanical Keyboard', 'description' => 'Tactile RGB keyboard', 'price' => 129.99, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'USB-C Hub', 'description' => '7-in-1 multiport adapter', 'price' => 39.99, 'created_at' => now(), 'updated_at' => now()],
            ]);
        }
}