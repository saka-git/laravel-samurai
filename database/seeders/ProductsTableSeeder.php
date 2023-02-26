<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 50個のデータを生成する
        for ($i = 1; $i <= 50; $i++) {
            Product::create([
                'name' => '商品' . $i,
                'description' => '商品' . $i . 'の説明',
                'price' => rand(100, 20000),
                'category_id' => rand(1, 18),
            ]);
        }
    }
}