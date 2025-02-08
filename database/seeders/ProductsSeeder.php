<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker; // Import đúng namespace của Faker

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(); // Tạo một instance của Faker

        for ($i = 0; $i < 10; $i++) { // Tạo 10 sản phẩm mẫu
            DB::table('products')->insert([
                'name' => $faker->word,
                'image' => $faker->imageUrl(640, 480, 'products', true),
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 1, 1000),
                'quantity' => $faker->numberBetween(1, 100),
                'category_id' => $faker->numberBetween(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
