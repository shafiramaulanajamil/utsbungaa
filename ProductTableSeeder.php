<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Bunga Mawar Merah',
                'description' => 'Selamat datang dalam dunia keindahan romantis bunga mawar merah kami. Temukan kecantikan yang tak terbandingkan dan makna yang mendalam di setiap kelopaknya.',
                'price' => 25.00,
            ],
            [
                'name' => 'Bunga Mawar Merah Muda',
                'description' => 'Sambut keanggunan lembut bunga mawar merah muda kami. Temukan pesona yang memikat dan kelembutan yang menawan di setiap kelopaknya.',
                'price' => 25.00,
            ],
            [
                'name' => 'Bunga Tulip Putih',
                'description' => 'Sambut keindahan sederhana namun elegan bunga tulip putih kami. Temukan kemurnian yang memukau dan kesederhanaan yang memancarkan keindahan di setiap kelopaknya.',
                'price' => 21.00,
            ],
            [
                'name' => 'Bunga Tulip Kuning',
                'description' => 'Sambut keceriaan dan kehangatan dengan keindahan bunga tulip kuning kami. Temukan pesona yang cerah dan semangat yang memancar di setiap kelopaknya.',
                'price' => 21.00,
            ],
        ];
        DB::table('products')->insert($products);
    }
}
