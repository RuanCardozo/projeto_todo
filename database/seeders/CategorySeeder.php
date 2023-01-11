<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'title' => 'Categoria de exemplo',
            'color' => 'aff0000',
            'user_id' => 1
        ]);

        category::create([
            'title' => 'Categoria de exemplo 2',
            'color' => 'aff00ff',
            'user_id' => 1
        ]);

        category::create([
            'title' => 'Categoria de exemplo 3',
            'color' => 'aff00ff',
            'user_id' => 1
        ]);
    }
}
