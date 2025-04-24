<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            [
                'name'        => 'Elektronik',
                'description' => 'Barang-barang elektronik rumah tangga',
                'created_by'  => 1, // admin1
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Pakaian',
                'description' => 'Busana pria dan wanita',
                'created_by'  => 2, // admin2
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Alat Tulis',
                'description' => 'Perlengkapan kantor dan sekolah',
                'created_by'  => 1,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Olahraga',
                'description' => 'Peralatan dan pakaian olahraga',
                'created_by'  => 2,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
