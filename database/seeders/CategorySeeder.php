<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryseeder = [
            [
                'category_name' => 'Sets',
                'foto' => 'sets.png' 
            ],
            [
                'category_name' => 'Fruits',
                'foto' => 'fruit.png' 
            ],
            [
                'category_name' => 'Veegies',
                'foto' => 'veggies.png' 
            ],
            [
                'category_name' => 'Fungi',
                'foto' =>   'fungi.png' 
            ],
            [
                'category_name' => 'Greenery',
                'foto' => 'greenery.png' 
            ],
            [
                'category_name' => 'Spices',
                'foto' => 'spices.png' 
            ],
            [
                'category_name' => 'Seeds',
                'foto' => 'seeds.png' 
            ],
        ];
        Categories::insert($categoryseeder);
    }
}
