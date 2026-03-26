<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Начало',          'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Хранителни продукти', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Аптека',          'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Природа',      'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Земеделие',          'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}