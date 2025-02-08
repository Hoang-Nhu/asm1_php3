<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'ÁO NAM MÙA ĐÔNG ', 'description' => 'Áo thời trang dành cho nam mùa lạnh'],
            ['name' => 'QUẦN NGẮN DÀNH CHO NAM', 'description' => 'Quần thời trang dành cho nam, mẫu ngắn'],
            ['name' => 'ÁO LẠNH CHO NỮ', 'description' => 'Áo thời trang dành cho nữ, áo dày dặn '],
            ['name' => 'QUẦN NỮ ', 'description' => 'Quần thời trang dành cho nữ'],
            // Thêm các danh mục khác
        ]);
        
    }
        //
    }

