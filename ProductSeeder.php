<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Bunga Anggrek Ungu',
                'description' => 'Selamat datang di dunia misteri dan keindahan bunga anggrek ungu yang menawan. Anggrek ungu, dengan keanggunan dan kelembutan warna ungunya, adalah karya seni alami yang memukau dan mempesona.',
                'price' => 21.00,
                'image' => 'images/produk1.jpeg' 
            ],
        ];
        DB::table('products')->insert($products);
    }
}
