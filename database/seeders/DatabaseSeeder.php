<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $productseeder = [
            [
                'category_id' => 2,
                'product_name' => 'Strawberry',
                'unit' => 'kg',
                'price' => 27000,
                'foto' => 'strawberry.png'
            ],
            [
                'category_id' => 3,
                'product_name' => 'Turnip',
                'unit' => 'kg',
                'price' => 30000,
                'foto' => 'turnip.png'
            ],
            [
                'category_id' => 2,
                'product_name' => 'Potato',
                'unit' => 'kg',
                'price' => 29000,
                'foto' => 'potato.png'
            ],
            [
                'category_id' => 3,
                'product_name' => 'Red Onion',
                'unit' => 'kg',
                'price' => 35000,
                'foto' => 'onion.png'
            ],
            [
                'category_id' => 3,
                'product_name' => 'Garlic',
                'unit' => '100 gr',
                'price' => 27000,
                'foto' => 'garlic.png'
            ],
            [
                'category_id' => 7,
                'product_name' => 'Fennel',
                'unit' => '100 gr',
                'price' => 10000,
                'foto' => 'fennel.png'
            ],
            [
                'category_id' => 3,
                'product_name' => 'Carrot',
                'unit' => 'kg',
                'price' => 15000,
                'foto' => 'wortel.png'
            ],
            [
                'category_id' => 3,
                'product_name' => 'Red Chili',
                'unit' => 'kg',
                'price' => 100000,
                'foto' => 'redchili.png'
            ],
        ];
        Product::insert($productseeder);
    }
}
